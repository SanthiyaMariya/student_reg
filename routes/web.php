<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\studentcontroller;

Route::get('/',[studentcontroller::class,'index']);
Route::post('/add_student',[studentcontroller::class,'add_student']);
