<?php

namespace App\Models;

use App\Models\Status;
use App\Models\CategoryNew;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actualite extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName():string
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where(fn($query)=>
            $query->where('title', 'like', '%'.$search.'%')
            ->orWhere('content', 'like', '%'.$search.'%'));
        });

        $query->when($filters['categoryNew'] ?? false, function($query, $category){
            $query->whereHas('categoryNew', fn($query) => 
            $query->where('name',$category));
        });
        $query->when($filters['status'] ?? false, function($query, $status){
            $query->whereHas('status', fn($query) => 
            $query->where('libelle',$status));
        });
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function categoryNew()
    {
        return $this->belongsTo(CategoryNew::class, 'categoryNew_id');
    }

    public function coverImage() : Attribute
    {
        return Attribute::make(
            set: fn($value) => $value->store('actualitesStore', 'public')
        );
    }
    public function slug():Attribute
    {
        return Attribute::make(
            set: fn($value) => \Str::slug($value)
        );
    }
}
