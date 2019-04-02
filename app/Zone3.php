<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone3 extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function pisheet(){
        return $this->belongsTo(Pisheet::class);
    }
    public function hydraulicz3s(){
        return $this->hasMany(Hydraulicz3::class);
    }
    public function archoses(){
        return $this->hasMany(Archose::class);
    }
    public function pipeboomstickclamps(){
        return $this->hasMany(Pipeboomstickclamp::class);
    }
    public function archoseuppers(){
        return $this->hasMany(Archoseupper::class);
    }
    public function relateds(){
        return $this->hasMany(Related::class);
    }
    public function airconditionings(){
        return $this->hasMany(Airconditioning::class);
    }
    public function cabins(){
        return $this->hasMany(Cabin::class);
    }
}
