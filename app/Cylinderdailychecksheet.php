<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cylinderdailychecksheet extends Model
{
    //
    protected $guarded = [];
    public $timestamps = false;

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function masterlog(){
        return $this->belongsTo(Masterlog::class);
    }
    public function dataunitdailychecks(){
        return $this->hasMany(Dataunitdailycheck::class);
    }
    public function sheetdailychecks(){
        return $this->hasMany(Sheetdailycheck::class);
    }
}
