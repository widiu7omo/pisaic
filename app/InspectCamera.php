<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectCamera extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function logunit(){
        return $this->belongsTo(Logunit::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
