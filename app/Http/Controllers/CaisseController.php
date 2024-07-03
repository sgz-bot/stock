<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaisseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function showCurrentDateTime()
    {
        $currentDateTime = now();
        return view('your-view', compact('currentDateTime'));
    }

    public function vente()
    {
        return view('caisse.vente');
    }
    


}
