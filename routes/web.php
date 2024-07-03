<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaisseController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\UtilisateursController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CaisseController::class, 'index'])->name('index');

Route::get('/gestion_des_droits', [UtilisateursController::class, 'gestion_des_droits'])->name('gestion_des_droits');
Route::get('/gestion-financier', [PharmacieController::class, 'parametre_financier'])->name('parametre_financier');
Route::get('/utilisateurs', [UtilisateursController::class, 'utilisateurs'])->name('utilisateurs');
Route::get('/vente', [CaisseController::class, 'vente'])->name('vente');
Route::get('/fiche_denregistrement', [PharmacieController::class, 'fiche_denregistrement'])->name('fiche_denregistrement');  