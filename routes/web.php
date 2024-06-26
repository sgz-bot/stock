<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaisseController;
use App\Http\Controllers\UtilisateursController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CaisseController::class, 'index'])->name('index');

Route::get('/utilisateurs', [UtilisateursController::class, 'gestion_des_droits'])->name('gestion_des_droits');