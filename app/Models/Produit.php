<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class);
    }

    public function achats()
    {
        return $this->hasMany(Achat::class);
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
}
