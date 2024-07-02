<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function droitsAcces()
    {
        return $this->belongsToMany(DroitAcces::class);
    }


    public function achats()
    {
        return $this->hasMany(Achat::class);
    }


}
