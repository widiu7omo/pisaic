<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LogUnit;

class Component extends Model
{
    //
    protected $guarded = [];

    public function log_unit(){
        return $this->belongsTo(LogUnit::class);
    }
}
