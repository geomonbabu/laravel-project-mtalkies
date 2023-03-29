<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    public function posts()
    {
        return $this->hasMany(post::class, 'user_id', 'id');
    }
}
