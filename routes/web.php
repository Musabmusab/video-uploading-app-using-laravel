<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/uploadproduct',[UserController::class,'store']);

Route::get('/uploadpage',[UserController::class,'upload']);

Route::get('/show',[UserController::class,'show']);

Route::get('/detail/{id}',[UserController::class,'detail']);
Route::get('/delete/{id}',[UserController::class,'delete']);



