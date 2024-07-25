<?php

use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/halo',[HaloController::class,'coba']);


Route::get('/todo',function(){
    return view('todo.app');
});