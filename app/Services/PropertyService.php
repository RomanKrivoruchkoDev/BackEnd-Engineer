<?php


namespace App\Services;


use App\Models\Property;
use App\Models\PropertyAnalytic;
use Illuminate\Support\Str;

class PropertyService
{
    /**
     * @param string $uiid
     * @return Property
     */
    public function getByUiid(string $uiid) : Property
    {
        return Property::where(['guid' => $uiid])->firstOrFail();
    }

    /**
     * @param Property $property
     * @param int $id
     * @return PropertyAnalytic
     */
    public function getPropertyAnalytic(Property $property, int $id) : PropertyAnalytic
    {
        return $property->analytics()->where(['id' => $id])->firstOrFail();
    }

    /**
     * @param array $data
     * @return Property
     */
    public function create(array $data) : Property
    {
        return Property::create(array_merge(
            $data,
            ['guid' => Str::uuid()] //can be moved to observer but here is more easy to control
        ));
    }

    public function createAnalytic(Property $property, array $data) : PropertyAnalytic
    {
        $analytic = new PropertyAnalytic($data);
        $property->analytics()->save($analytic);

        return $analytic;
    }

    /**
     * @param PropertyAnalytic $analytic
     * @param array $data
     * @return PropertyAnalytic
     */
    public function updateAnalytic(PropertyAnalytic $analytic, array $data) : PropertyAnalytic
    {
        $analytic = $analytic->fill($data);
        $analytic->save();

        return $analytic;
    }

    /**
     * @param Property $property
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAnalytics(Property $property)
    {
        return $property->analytics()->paginate();
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function getSummary(array $filters)
    {
        $query = Property::leftJoin('property_analytics', 'properties.id', '=', 'property_analytics.property_id')
            ->selectRaw('MIN(CAST(REPLACE(property_analytics.value, ",", ".") as DECIMAL(9,5))) as min')
            ->selectRaw('MAX(CAST(REPLACE(property_analytics.value, ",", ".") as DECIMAL(9,5))) as max')
            ->selectRaw('SUM(property_analytics.value) as total')
            ->selectRaw('AVG(property_analytics.value) as median')
            ->selectRaw('COUNT(property_analytics.value) as not_null')
            ->where('analytic_type_id', $filters['analytic_type_id']);

        // Can be refactor to filters implementation if we will have more filters
        if (isset($filters['suburb'])) {
            $query->addSelect('properties.suburb')
                ->where('properties.suburb', $filters['suburb'])
                ->groupBy(['properties.suburb']);
        } elseif (isset($filters['state'])) {
            $query->addSelect('properties.state')
                ->where('properties.state', $filters['state'])
                ->groupBy(['properties.state']);
        } elseif (isset($filters['country'])) {
            $query->addSelect('properties.country')
                ->where('properties.country', $filters['country'])
                ->groupBy(['properties.country']);
        }

        return $query->first();
    }
}
