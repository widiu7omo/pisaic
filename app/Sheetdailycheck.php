<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheetdailycheck extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function sheetdailycheck(){
        return $this->belongsTo(Sheetdailycheck::class);
    }
}
