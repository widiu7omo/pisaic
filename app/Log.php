<?php

namespace App;
use App\Component;
use Illuminate\Database\Eloquent\Model;

class LogUnit extends Model
{
    //
    public function components(){
        return $this->hasMany(Component::class);
    }
}
