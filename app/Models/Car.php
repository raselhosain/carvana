<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    public function carFeature()
    {
        return $this->hasMany(CarFeature::class);
    }

    public function otherImage()
    {
        return $this->hasMany(OtherImage::class);
    }

}
