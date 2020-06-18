<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAnalytic extends Model
{
    protected $fillable = [
        'value', 'property_id', 'analytic_type_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(AnalyticType::class, 'analytic_type_id', 'id');
    }
}
