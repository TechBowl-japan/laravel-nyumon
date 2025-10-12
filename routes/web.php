<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');