<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone2 extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function pisheet(){
        return $this->belongsTo(Pisheet::class);
    }
    public function maindrivemotors(){
        return $this->hasMany(Maindrivemotor::class);
    }
    public function pdgpumps(){
        return $this->hasMany(Pdgpump::class);
    }
    public function swings(){
        return $this->hasMany(Swing::class);
    }
    public function oilcenters(){
        return $this->hasMany(Oilcenter::class);
    }
    public function clss(){
        return $this->hasMany(Cls::class);
    }
    public function slss(){
        return $this->hasMany(Sls::class);
    }
    public function hydraulics(){
        return $this->hasMany(Hydraulic::class);
    }
    public function electrics(){
        return $this->hasMany(Electric::class);
    }
    public function additionalfluids(){
        return $this->hasMany(Additionalfluid::class);
    }

}

