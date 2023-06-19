<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\Recruteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adresse extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function recruteur()
    {
        return $this->hasOne(Recruteur::class, 'adresse_id');
    }

    public function candidat()
    {
        return $this->hasOne(Candidat::class, 'adresse_id');
    }
}
