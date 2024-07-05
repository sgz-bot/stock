<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function ficheEnregistrement()
    {
        return view("produit.ficheEnregistrement");
    }

    public function vente()
    {
        return view("produit.vente");
    }
}
