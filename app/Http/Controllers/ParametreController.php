<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametreController extends Controller
{
    public function utilisateur()
    {
        return view('parametre.utilisateur');
    }

    public function parametreFinancier()
    {
        return view('parametre.parametreFinancier');
    }

    public function gestionDroits()
    {
        return view('parametre.gestionDroits');
    }

}
