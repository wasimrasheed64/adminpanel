<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/blog';

    protected $fillable = [
        'image',
        'name',
        'designation',
        'description',
    ];

    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
}
