<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index(){
         return view('add_student');

    }


    public function add_student(Request $request){
       
       //dd($request ->all());
      student::create($request->all());
    }
        


}
