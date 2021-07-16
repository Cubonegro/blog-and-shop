<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/* Login */
Route::get('/', function(){
  return view('admin.login');
});

Route::post('/', [LoginController::class, "login"])->name('login');


// Admin routes
Route::get('/dashboard', function(){
  return view('admin.index');
})->middleware('auth');
