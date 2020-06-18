<?php

namespace App\Http\Controllers;

use App\Http\Requests\Analytic\SummaryRequest;
use App\Http\Requests\Property\PropertyAnalyticStoreRequest;
use App\Http\Requests\Property\PropertyAnalyticUpdateRequest;
use App\Http\Requests\Property\PropertyStoreRequest;
use App\Http\Resources\Analytic\AnalyticTypeResource;
use App\Http\Resources\Analytic\SummaryResource;
use App\Http\Resources\Property\PropertyAnalyticResource;
use App\Http\Resources\Property\PropertyResource;
use App\Services\AnalyticTypeService;
use App\Services\PropertyService;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * @var PropertyService
     */
    protected $propertyService;

    /**
     * PropertyController constructor.
     * @param PropertyService $propertyService
     */
    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }


    /**
     * @param PropertyStoreRequest $request
     * @return PropertyResource
     */
    public function store(PropertyStoreRequest $request)
    {
        $entity = $this->propertyService->create($request->all());

        return PropertyResource::make($entity);
    }

    /**
 * @param PropertyAnalyticStoreRequest $request
 * @param $uiid
 * @return PropertyAnalyticResource
 */
    public function storeAnalytics(PropertyAnalyticStoreRequest $request, $uiid)
    {
        $property = $this->propertyService->getByUiid($uiid);
        $analytic = $this->propertyService->createAnalytic($property, $request->all());

        return PropertyAnalyticResource::make($analytic);

    }

    /**
     * @param PropertyAnalyticUpdateRequest $request
     * @param $uiid
     * @param $analyticId
     * @return PropertyAnalyticResource
     */
    public function updateAnalytics(PropertyAnalyticUpdateRequest $request, $uiid, $analyticId)
    {
        $property = $this->propertyService->getByUiid($uiid);
        $analytic = $this->propertyService->getPropertyAnalytic($property, $analyticId);
        $analytic = $this->propertyService->updateAnalytic($analytic, $request->all());

        return PropertyAnalyticResource::make($analytic);
    }

    /**
     * @param Request $request
     * @param $uiid
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function showAnalytics(Request $request, $uiid)
    {
        $property = $this->propertyService->getByUiid($uiid);
        $analytics = $this->propertyService->getAnalytics($property);

        return PropertyAnalyticResource::collection($analytics);
    }


    /**
     * @param SummaryRequest $request
     * @param AnalyticTypeService $analyticTypeService
     * @return array
     */
    public function showSummary(SummaryRequest $request, AnalyticTypeService $analyticTypeService)
    {
        $summary = $this->propertyService->getSummary($request->all());
        $analyticType = $analyticTypeService->getById($request->get('analytic_type_id'));

        return [
            'data' => [
                'summary' => SummaryResource::make($summary),
                'analytic_type' => AnalyticTypeResource::make($analyticType)
            ]
        ];
    }
}
