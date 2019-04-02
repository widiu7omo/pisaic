<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataunitdailycheck extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function cylinderdailychecksheet(){
        return $this->belongsTo(Cylinderdailychecksheet::class);
    }
}
