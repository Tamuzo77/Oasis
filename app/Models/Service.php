<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
