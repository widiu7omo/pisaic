<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Unit extends Model
{
    //
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(Unit::class);
    }
    
}
