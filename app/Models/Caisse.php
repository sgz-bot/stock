<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{
    use HasFactory;

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class);
    }
}
