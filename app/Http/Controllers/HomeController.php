<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role = Auth()->user()->role_id;
            if($role == '1'){
                return view('admin.index');
            }
            else if($role == '3'){
                return view('web.index');
            }
        }
        else{
            return redirect()->back();
        }



    }
}
