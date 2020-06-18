<?php

namespace App\Http\Resources\Analytic;

use Illuminate\Http\Resources\Json\JsonResource;

class AnalyticTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
