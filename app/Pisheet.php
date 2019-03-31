<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pisheet extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function masterlog(){
        return $this->belongsTo(Masterlog::class);
    }
    public function workorders(){
        return $this->hasMany(Workorder::class);
    }
    public function dataunits(){
        return $this->hasMany(Dataunit::class);
    }
    public function zone1(){
        return $this->hasMany(Zone1::class);
    }
    public function zone2(){
        return $this->hasMany(Zone2::class);
    }
    public function zone3(){
        return $this->hasMany(Zone3::class);
    }
}
