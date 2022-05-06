<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_challenges');
    }
}
