<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::get('/',[JournalController::class,'index'])->name('journals.index');
Route::get('/create',[JournalController::class,'create'])->name('journals.create');
Route::post('/store',[JournalController::class,'store'])->name('journals.store');

