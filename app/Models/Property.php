<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * @var array
     */
    protected $hidden = ['id'];

    /**
     * @var array
     */
    protected $fillable = [
        'suburb', 'state', 'country', 'guid'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function analytics()
    {
        return $this->hasMany(PropertyAnalytic::class);
    }
}
