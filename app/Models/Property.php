<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'suburb', 'state', 'country'
    ];
}
