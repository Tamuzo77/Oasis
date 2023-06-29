<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where(fn($query)=>
            $query->where('lastname', 'like', '%'.$search.'%')
            ->orWhere('firstname', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%'));
        });

        $query->when($filters['visible'] ?? false, function($query, $visible){
            $query->where('visible', $visible);
        });
    }

    public function picture() : Attribute
    {
        return Attribute::make(
            set: fn($value) => $value->store('cvthèque', 'public')
        );
    }

    public function cvPath() : Attribute
    {
        return Attribute::make(
            set: fn($value) => $value->store('cvthèque/cvs', 'public')
        );
    }
}
