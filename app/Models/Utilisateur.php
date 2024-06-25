<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    public function caisse()
    {
        return $this->belongsTo(Caisse::class);
    }

    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
}
