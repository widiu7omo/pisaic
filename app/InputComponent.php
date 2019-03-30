<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputComponent extends Model
{
    //
    protected $guarded = [];

    public function component(){
        return $this->belongsTo(Component::class);
    }
}
