<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class Member extends Authenticable
{
    use HasFactory;

    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_picture 
            ? asset('uploads/profile_pictures/' . $this->profile_picture) 
            : asset('uploads/profile_pictures/default.png');
    }
}
