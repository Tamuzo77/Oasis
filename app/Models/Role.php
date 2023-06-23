<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $guraded = ['id'];

    public const IS_USER = 1;
    public const IS_ADMIN = 2;
    public const IS_LEARNER = 3;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
