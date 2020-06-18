<?php

namespace App\Http\Resources\Analytic;

use Illuminate\Http\Resources\Json\JsonResource;

class SummaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $withoutValuePercentage = $this->getPercentage($this->total, $this->not_null);

        return [
            'min' => $this->min,
            'max' => $this->max,
            'state' => $this->when($this->state, $this->state),
            'country' => $this->when($this->country, $this->country),
            'suburb' => $this->when($this->suburb, $this->suburb),
            'median' => round($this->median, 2),
            'total' => $this->total,
            'without_value_percentage' => $withoutValuePercentage,
            'with_value_percentage' => round(100 - $withoutValuePercentage, 2),
        ];
    }

    // better move it to helper or smth similar
    public function getPercentage($total, $value)
    {
        return round($value / $total * 100, 2);
    }
}
