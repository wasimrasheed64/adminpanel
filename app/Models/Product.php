<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/products';

    protected $fillable = [
        'category_id',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'name',
        'slug',
        'short_description',
        'description',
        'menu_image',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'is_featured',
        'is_active',
        'in_menu',
        'is_footer',
        'menu_no',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getMenuImageAttribute($value){
        return asset('storage/'.$value);
    }

    public function getImage1Attribute($value){
        return asset('storage/'.$value);
    }
    public function getImage2Attribute($value){
        return asset('storage/'.$value);
    }
    public function getImage3Attribute($value){
        return asset('storage/'.$value);
    }
    public function getImage4Attribute($value){
        return asset('storage/'.$value);
    }
    public function scopeFeatured($query)
    {
        return $query->where('is_featured',1)->where('is_active',1);
    }

    public function scopeMenu($query)
    {
        return $query->where('in_menu',1)->where('is_active',1);
    }
}
