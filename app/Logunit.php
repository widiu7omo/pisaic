<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Component;
use App\Unit;
use App\InspectCamera;

class Logunit extends Model
{
    //
    protected $guarded = [];

    public function components(){
        return $this->hasMany(Component::class);
    }
    public function units(){
        return $this->belongsToMany(Unit::class);
    }
    public function inspectcameras(){
        return $this->hasMany(InspectCamera::class,'unit_id');
    }
}
