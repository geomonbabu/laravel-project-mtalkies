<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'user_id',
        'post_id',
        'values',
    ];

    public function post()
    {
        return $this->belongsTo(post::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
