<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone2 extends Model
{
    //
    public function pisheet(){
        return $this->belongsTo(Pisheet::class);
    }
    public function maindrivemotors(){
        return $this->belongsTo(Maindrivemotor::class);
    }
    public function pdgpumps(){
        return $this->belongsTo(Pdgpump::class);
    }
    public function swings(){
        return $this->belongsTo(Swing::class);
    }
    public function oilcenters(){
        return $this->belongsTo(Oilcenter::class);
    }
    public function clss(){
        return $this->belongsTo(Cls::class);
    }
    public function slss(){
        return $this->belongsTo(Sls::class);
    }
    public function hydraulics(){
        return $this->belongsTo(Hydraulic::class);
    }
    public function electrics(){
        return $this->belongsTo(Electric::class);
    }
    public function additionalfluids(){
        return $this->belongsTo(Additionalfluid::class);
    }

}

