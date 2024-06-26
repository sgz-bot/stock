<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaisseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CaisseController::class, 'index'])->name('index');