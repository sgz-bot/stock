<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function gestion_des_droits()
    {
        return view('utilisateurs.gestion_des_droits');
    }
}
