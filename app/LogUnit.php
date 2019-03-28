<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Component;

class LogUnit extends Model
{
    //
    protected $guarded = [];
    
    public function components(){
        return $this->hasMany(Component::class);
    }
}
