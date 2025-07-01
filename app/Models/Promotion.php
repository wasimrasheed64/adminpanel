<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/promotion';

    protected $fillable = [
        'image',
        'link',
        'class',
        'page',
        'home_page_height',
    ];

    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
}
