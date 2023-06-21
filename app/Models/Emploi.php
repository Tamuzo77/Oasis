<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Commune;
use App\Models\Candidat;
use App\Models\Recruteur;
use App\Models\Department;
use App\Models\Arrondissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emploi extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $guarded = [];

    public function recruteur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function candidats()
    {
        return $this->hasMany(User::class, 'demandes_emplois', 'emploi_id', 'user_id');
    }

    public function department()
    {
        return  $this->belongsToThrough(Department::class, [Commune::class, Arrondissement::class, Ville::class]);
    }

    public function commune()
    {
        return  $this->belongsToThrough(Commune::class, [ Arrondissement::class, Ville::class]);
    }

    public function arrondissement()
    {
        return  $this->belongsToThrough(Arrondissement::class, [Ville::class]);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
