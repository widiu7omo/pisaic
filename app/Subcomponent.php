<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Component;
class Subcomponent extends Model
{
    //
    protected $guarded = [];

    public function component(){
        return $this->belongsTo(Component::class);
    }
    public function inputsubcomponents(){
        return $this->hasMany(InputSubcomponent::class);
    }
}
