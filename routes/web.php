<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return redirect()->route('tasks.index'); });
Route::resource('tasks', TaskController::class);
Route::get('/about', function() { return view('about'); })->name('about');