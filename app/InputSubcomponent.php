<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputSubcomponent extends Model
{
    //
    protected $guarded = [];

    public function subcomponent(){
        return $this->belongsTo(Subcomponent::class);
    }
}
