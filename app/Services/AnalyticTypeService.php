<?php


namespace App\Services;


use App\Models\AnalyticType;

class AnalyticTypeService
{

    /**
     * @param int $id
     * @return AnalyticType
     */
    public function getById(int $id) : AnalyticType
    {
        return AnalyticType::findOrFail($id);
    }
}
