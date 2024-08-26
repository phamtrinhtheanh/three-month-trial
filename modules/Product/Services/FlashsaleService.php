<?php
namespace Modules\Product\Services;
use Carbon\Carbon;
use DB;
use Modules\Product\Models\Product;

class FlashsaleService
{
    public function getFlashsaleProduct()
    {
        $flProducts = Product::whereHas('variants', function ($query) {
            $query->join('flashsale_variant', 'product_variants.id', '=', 'flashsale_variant.variant_id')
                ->join('flashsales', 'flashsale_variant.flashsale_id', '=', 'flashsales.id')
                ->where('flashsales.start', '<=', Carbon::now())
                ->where('flashsales.end', '>=', Carbon::now());
        })
            ->get();
        return view('Product::test', compact('flProducts'));
    }
}