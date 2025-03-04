<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/',[JobController::class,'index']);
Route::get('/search',SearchController::class);
Route::get('/tag/{tag:name}',TagController::class);

Route::get('/jobs/create',[JobController::class,'create'])->middleware('auth');
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');

Route::middleware("guest")->group(function(){
    Route::get('/register',[RegisterController::class,'create']);
    Route::post('/register',[RegisterController::class,'store']);

    Route::get('/login',[LoginController::class,'create'])->name("login");
    Route::post('/login',[LoginController::class,'store']);
});


Route::delete('/logout',[LoginController::class,'destroy'])->middleware("auth");
