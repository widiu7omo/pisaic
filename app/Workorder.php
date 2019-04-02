<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    //
    protected $guarded = [];
    // public $timestamps = false;

    public function pisheet(){
        return $this->belongsTo(Pisheet::class);
    }
}
