<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    public function show($id){
        $cat = Category::findOrFail($id);
        $cats = Category::select('title','id')->get();
        $skills = $cat->skills()->paginate(6);
        return view('web.category.show',compact('cat','cats','skills'));
    }
}
