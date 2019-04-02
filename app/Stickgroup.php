<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stickgroup extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function zone1(){
        return $this->belongsTo(Zone1::class);
    }
}
