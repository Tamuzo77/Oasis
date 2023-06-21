<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Emploi;
use App\Models\Department;
use App\Models\Arrondissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function arrondissements()
    {
        return $this->hasMany(Arrondissement::class);
    }

    public function emplois()
    {
        return $this->hasManyDeep(Emploi::class, [Arrondissement::class, Ville::class]);
    }
}
