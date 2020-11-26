<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomSchedule extends Model
{
    use HasFactory;

    public function classroom(){
        return $this->belongsTo('App\Models\Classroom');
    }
}
