<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hydraulicz3 extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function zone3(){
        return $this->belongsTo(Zone3::class);
    }
}
