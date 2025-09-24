<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = 
    [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'image',
        'specialization',
        'looking_for',
        'is_developer',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
