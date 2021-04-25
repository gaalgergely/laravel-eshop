<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelProduct extends Product
{
    use HasFactory;

    //protected $with = [];

    protected static function booted()
    {
        //static::addGlobalScope(new AvailableScope());
    }
}
