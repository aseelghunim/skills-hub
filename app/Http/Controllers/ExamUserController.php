<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamUserController extends Controller
{
    public function show($id){
        $exam = Exam::findOrFail($id);
        return view('web.exam.show',compact('exam'));
    }

    public function questions($id){
        $exam = Exam::findOrFail($id);
        $questions = $exam->questions;
        return view('web.exam.exam-questions',compact('exam','questions'));
    }
}
