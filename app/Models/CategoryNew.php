<?php

namespace App\Models;

use App\Models\Actualite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryNew extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function actualites()
    {
        return $this->hasMany(Actualite::class, 'categoryNew_id');
    }
}
