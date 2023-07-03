<?php

namespace App\Models;

use App\Models\Status;
use App\Models\CategoryForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function coverImage() : Attribute
    {
        return Attribute::make(
            set: fn($value) => $value->store('formationsStore', 'public')
        );
    }

    public function slug():Attribute
    {
        return Attribute::make(
            set: fn($value) => \Str::slug($value)
        );
    }

    public function categoryForm()
    {
        return $this->belongsTo(CategoryForm::class, 'categoryForm_id');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
