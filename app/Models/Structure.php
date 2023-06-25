<?php

namespace App\Models;

use App\Models\Emploi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
}
