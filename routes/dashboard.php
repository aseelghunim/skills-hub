<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CategoryController;

    Route::get('dashboard/cats/archive',[CategoryController::class,'archive'])->name('cats.archived');
    Route::get('dashboard/cats/restore/{id}',[CategoryController::class,'restore'])->name('cats.restore');
    Route::get('dashboard/cats/forceDelete/{id}',[CategoryController::class,'forceDelete'])->name('cats.forceDelete');


    Route::resource('dashboard/cats',CategoryController::class)->middleware('auth');
?>
