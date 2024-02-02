<?php

use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class,'index'])->name('home')->middleware('auth');


Route::get('/cat/show/{id}',[CategoryUserController::class,'show'])->name('cat.show');
Route::get('/skill/show/{id}',[SkillUserController::class,'show'])->name('skill.show');
Route::get('/exam/show/{id}',[ExamUserController::class,'show'])->name('exam.show');
Route::get('/exam/questions/{id}',[ExamUserController::class,'questions'])->name('exam.questions');





Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
