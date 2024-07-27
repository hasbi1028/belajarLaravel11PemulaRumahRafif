<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/halo',[HaloController::class,'coba']);


Route::get('/todolist', [TodoController::class,'index'])->name('todo');

Route::post('/todolist',[TodoController::class, 'store'])->name('todo.post');

Route::put('/todolist/{id}',[TodoController::class, 'update'])->name('todo.update');

Route::delete('/todolist/{id}',[TodoController::class, 'destroy'])->name('todo.delete');