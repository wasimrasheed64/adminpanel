<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model
{
    use HasFactory,SoftDeletes;
    const UPLOAD_DIRECTORY = 'images/maincategory';
    protected $fillable = [
        'name',
        'image'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class)
            ->where('is_menu','=',1)->where('is_active','=',1)
            ->with('categoryProducts');
    }
    public function scopeMenu($query)
    {
        return $query->where('in_menu',1)->where('is_active',1);
    }

    public function product()
    {
        return $this->hasManyThrough(Product::class,Category::class);
    }

    public function getImageAttribute($value)
    {
        return asset('storage/'.$value);
    }

}
