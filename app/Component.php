<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Logunit;

class Component extends Model
{
    //
    protected $guarded = [];

    public function logunit(){
        return $this->belongsTo(Logunit::class);
    }
    public function subcomponents(){
        return $this->hasMany(Subcomponent::class);
    }
    public function inputcomponents(){
        return $this->hasMany(InputComponent::class);
    }
}
