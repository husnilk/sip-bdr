<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomSchedule extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'scheduled_day', 
        'start_time', 
        'finish_time', 
        'classroom_id'
    ];

    public function classroom(){
        return $this->belongsTo('App\Models\Classroom');
    }
}
