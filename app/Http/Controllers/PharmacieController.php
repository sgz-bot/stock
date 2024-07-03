<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function parametre_financier()
    {
        return view('utilisateurs.parametre_financier');
    }

    public function fiche_denregistrement()
    {
        return view('produits.fiche_denregistrement');
    }
}
