<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archose extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function zone3(){
        return $this->belongsTo(Zone3::class);
    }
}
