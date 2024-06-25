<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur_DroitAcces extends Model
{
    use HasFactory;

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function droitAcces()
    {
        return $this->belongsTo(DroitAcces::class);
    }
}
