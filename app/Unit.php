<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\User;
use App\Logunit;
use App\InspectCamera;
class Unit extends Model
{
    //
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function logunits(){
        return $this->belongsToMany(Logunit::class);
    }
    public function inspectcameras(){
        return $this->hasMany(InspectCamera::class);
    }
}
