<?php
namespace Modules\Product\Models;
use Illuminate\Database\Eloquent\Model;

class FlashsaleVariant extends Model
{
    protected $table = 'flashsale_variant';

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

    public function flashsale()
    {
        return $this->belongsTo(Flashsale::class);
    }
}
