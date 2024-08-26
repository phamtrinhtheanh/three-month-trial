<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashsale extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start',
        'end'
    ];

    
    public function products()
    {
        return $this->belongsToMany(Product::class,'flashsale_id', 'product_id', 'flashsale_product')
                    ->withTimestamps();
    }

    public function variants()
    {
        return $this->belongsToMany(ProductVariant::class,'flashsale_id', 'variant_id', 'flashsale_variant')
                    ->withPivot('flash_price', 'flash_stock', 'flash_sold')
                    ->withTimestamps();
    }

}
