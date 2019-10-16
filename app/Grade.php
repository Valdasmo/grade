<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function gradeStudent()
    {
        return $this->belongsTo('App\Student', 'student_id', 'id');
    }
 
    public function gradeLecture()
    {
        return $this->belongsTo('App\Lecture', 'lecture_id', 'id');
    }
}
