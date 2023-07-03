<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Actualite;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'status_id');
    }

    public function formations()
    {
        return $this->hasMany(Formation::class, 'status_id');
    }
}
