<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogunitUnit extends Model
{
    //
    protected $table = 'logunit_unit';
    protected $fillable = ['logunit_id','unit_id'];
    public $timestamps = false;

    // public function inspectcameras(){
    //     return $this->hasMany(InspectCamera::class);
    // }

}
