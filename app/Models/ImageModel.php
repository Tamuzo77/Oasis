<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}
