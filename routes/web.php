<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
Route::get('classes',[ClassController::class,'index'])->name('classes');
Route::get('subjects',[SubjectController::class,'index'])->name('subjects');
Route::get('configs',[ConfigController::class,'index'])->name('configs');