<?php

namespace App\Models;

use App\Models\Adresse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function adresse()
    {
        return $this->belongsTo(Adresse::class, 'adresse_id');
    }

    public function emplois()
    {
        return $this->belongsToMany(Emploi::class, 'demandes_emplois', 'candidat_id', 'emploi_id');
    }
}
