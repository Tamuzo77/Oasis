<?php

namespace App\Models;

use App\Models\Emploi;
use App\Models\Adresse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recruteur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function emplois()
    {
        return $this->hasMany(Emploi::class, 'recruteur_id');
    }

    public function adresse()
    {
    return $this->belongsTo(Adresse::class, 'adresse_id');
    }
}
