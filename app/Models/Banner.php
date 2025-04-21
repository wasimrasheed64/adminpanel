<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/banner';

    protected $fillable  = [
        'image',
        'heading',
        'description',
        'position',
        'button_text',
        'link',
    ];


    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }
}
