<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DroitAcces extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function utilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class);
    }
}
