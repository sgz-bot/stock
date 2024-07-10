<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('index');
});


Route::get('/parametre/utilisateur', [ParametreController::class, 'utilisateur'])->name('parametre.utilisateur');

Route::get('/parametre/parametre-financier', [ParametreController::class, 'parametreFinancier'])->name('parametre.parametreFinancier');

Route::get('/parametre/gestion-droits', [ParametreController::class, 'gestionDroits'])->name('parametre.gestionDroits');


Route::get('/gestion-categorie', [CategorieController::class, 'index'])->name('gestionCategorie');

Route::get('/fiche-enregistrement', [ProduitController::class, 'ficheEnregistrement'])->name('ficheEnregistrement');
