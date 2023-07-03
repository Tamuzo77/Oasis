<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formations()
    {
        return $this->hasMany(Formation::class, 'categoryForm_id');
    }
}
