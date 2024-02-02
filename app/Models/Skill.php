<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Exams(){
        return $this->hasMany(Exam::class);
    }

    public function getStudentsCount(){
        $studentsCount = 0;
        foreach($this->exams as $exam){
            $studentsCount+= $exam->users()->count();
        }
        return $studentsCount;
    }
}
