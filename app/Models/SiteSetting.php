<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/sitesetting';
    protected $fillable = [
        'logo',
        'footer_logo',
        'email',
        'phone',
        'address',
        'working_hours',
        'footer_description',
        'footer_image',
        'favicon'
    ];

    public function getLogoAttribute($value){
        return asset('storage/'.$value);
    }
    public function getFooterlogoAttribute($value){
        return asset('storage/'.$value);
    }
    public function getFaviconAttribute($value){
        return asset('storage/'.$value);
    }
}
