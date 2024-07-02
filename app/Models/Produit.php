<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;


    public function achats()
    {
        return $this->hasMany(Achat::class);
    }

    public function fournisseurs()
    {
        return $this->belongsToMany(Fournisseur::class);
    }
}
