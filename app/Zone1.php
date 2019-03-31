<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone1 extends Model
{
    //
    public function pisheet(){
        return $this->belongsTo(Pisheet::class);
    }
    public function bucketgroups(){
        return $this->hasMany(Bucketgroup::class);
    }
    public function stickgroups(){
        return $this->hasMany(Stickgroup::class);
    }
    public function boomgroups(){
        return $this->hasMany(Boomgroup::class);
    }
    public function tracklhgroups(){
        return $this->hasMany(Tracklhgroup::class);
    }
    public function trackrhgroups(){
        return $this->hasMany(Trackrhgroup::class);
    }
    public function centerframes(){
        return $this->hasMany(Centerframe::class);
    }
    public function ladders(){
        return $this->hasMany(Ladder::class);
    }
}
