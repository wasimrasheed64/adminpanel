<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/blog';

    protected $fillable = [
        'user_id',
        'seo_title',
        'slug',
        'title',
        'date',
        'short_description',
        'description',
        'image',
        'is_active',
    ];


    public function getImageAttribute($value){
        return asset('storage/'.$value);
    }

    public function user()
    {
        return $this->belongsTo(Admin::class,'user_id');
    }

    public function getNextAttribute()
    {
        return $this->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }

    public function getPreviousAttribute()
    {
        return $this->where('id', '<', $this->id)->orderBy('id','asc')->first();
    }
}

