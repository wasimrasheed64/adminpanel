<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const UPLOAD_DIRECTORY = 'images/categories';
    protected $fillable = [
        'main_category_id',
        'seo_title',
        'seo_description',
        'seo_keyword',
        'name',
        'slug',
        'short_description',
        'description',
        'banner_image',
        'category_image',
        'menu_position',
        'is_active',
        'menu_no',
        'is_menu',
        'is_footer',
    ];

    public function getBannerimageAttribute($value){
        return asset('storage/'.$value);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categoryProducts()
    {
        return $this->hasMany(Product::class)
            ->where('products.in_menu','=',1)
            ->where('products.is_active','=',1);
    }

    public function scopeMenu($query)
    {
        return $query->where('in_menu',1)->where('is_active',1);
    }
}
