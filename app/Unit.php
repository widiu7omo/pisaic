<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Logunit;
use App\InspectCamera;
class Unit extends Model{
    //
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function logunits(){
        return $this->belongsToMany(Logunit::class)->withPivot('unit_id');
    }
    //======================================NEW METHOD
    public function pisheets(){
        return $this->hasMany(Pisheet::class);
    }
    public function inspectcameras(){
        return $this->hasMany(InspectCamera::class,'unit_id');
    }
    public function problemlogs(){
        return $this->hasMany(Problemlog::class);
    }
    public function backlogentrysheets(){
        return $this->hasMany(Backlogentrysheet::class);
    }
    public function cylinderchecksheets(){
        return $this->hasMany(Cylinderdailychecksheet::class);
    }
    // public function workorders(){
    //     return $this->hasMany(Workorder::class);
    // }
}
