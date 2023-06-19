<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\Recruteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emploi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function recruteur()
    {
        return $this->belongsTo(Recruteur::class, 'recruteur_id');
    }

    public function candidats()
    {
        return $this->hasMany(Candidat::class, 'demandes_emplois', 'emploi_id', 'candidat_id');
    }
}
