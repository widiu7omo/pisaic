<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class InspectCamera extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function masterlog(){
        return $this->belongsTo(Masterlog::class);
    }
}
