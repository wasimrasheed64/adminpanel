<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/blog';

    protected $fillable = [
        'image',
        'heading',
        'description',
    ];

    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
}
