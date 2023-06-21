<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Emploi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arrondissement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function villes()
    {
        return $this->hasMany(Ville::class);
    }

    public function emplois()
    {
        return $this->hasManyThrough(Emploi::class, Ville::class);  
    }
}
