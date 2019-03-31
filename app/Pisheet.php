<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pisheet extends Model
{
    //
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
