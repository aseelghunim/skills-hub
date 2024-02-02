<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;


    public function Skill(){
        return $this->belongsTo(Skill::class);
    }

    public function Questions(){
        return $this->hasMany(Question::class);
    }

    public function Users(){
        return $this->belongsToMany(User::class);
    }

   
}
