<?php
namespace Modules\Product\Models;
use Illuminate\Database\Eloquent\Model;

class FlashsaleProduct extends Model
{
    protected $table = 'flashsale_product';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function flashsale()
    {
        return $this->belongsTo(Flashsale::class);
    }
}

