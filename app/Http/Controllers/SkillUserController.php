<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillUserController extends Controller
{
    public function show($id){
        $skill = Skill::findOrFail($id);
        $exams = $skill->exams()->paginate(1);
        return view('web.skill.show',compact('skill','exams'));
    }
}
