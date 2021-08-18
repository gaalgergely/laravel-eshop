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

    public function getForeignKey()
    {
        $parent = get_parent_class($this);
        return (new $parent)->getForeignKey();

        //return parent::getForeignKey();
    }

    public function getMorphClass()
    {
        $parent = get_parent_class($this);
        return (new $parent)->getMorphClass();
    }
}
