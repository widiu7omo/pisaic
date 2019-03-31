<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function component(){
        return $this->belongsTo(Component::class);
    }
    public function logunit(){
        return $this->belongsTo(Logunit::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
