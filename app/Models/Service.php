<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function coverImage():Attribute
    {
        return Attribute::make(
            set: fn($value) =>$value->store('servicesStore', 'public')
        );
    }

    public function slug():Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::slug($value)
        );
    }
}
