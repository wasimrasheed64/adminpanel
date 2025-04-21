<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use HasFactory,Notifiable;
    const UPLOAD_DIRECTORY = 'images/profile';
    protected $guard = 'admin';
    protected $fillable = ['name', 'email', 'password','image','active'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getImageAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class,'user_id');
    }


}
