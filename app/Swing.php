<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swing extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function zone2(){
        return $this->belongsTo(Zone2::class);
    }
}
