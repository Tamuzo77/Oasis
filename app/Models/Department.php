<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Commune;
use App\Models\Arrondissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }

    public function emplois()
    {
        return $this->hasManyDeep(Emploi::class, [Commune::class, Arrondissement::class, Ville::class ]);
    }
}
