<?php

namespace App\Models;

use App\Models\ImageModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parentPage()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    public function imageModels()
    {
        return $this->belongsToMany(ImageModel::class);
    }
}
