<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Models\Shop;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'sale_price',
        'short_desc',
        'desciption',
        'rating',
        'sold',
        'slug',
        'thumbnail',
        'category_id',
        'shop_id',
        'user_created',
        'user_updated'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function flashsales()
    {
        return $this->belongsToMany(Flashsale::class, 'flashsale_product')
                    ->withTimestamps();
    }

    public function flashsaleVariants()
    {
        return $this->hasManyThrough(FlashsaleVariant::class, ProductVariant::class);
    }
}
