<?php
namespace Modules\Cart;

use Modules\Cart\Models\Cart;


class CartService
{
    public function getCartDetails($user_id)
    {
        $cart = Cart::where("user_id", $user_id)->first();
        if (!$cart) {
            return abort(404);
        }
        return $cart;
    }

    public function groupProductsByShop($cart)
    {
        if (!$cart) {
            return [];
        }

        $productsByShop = $cart->products->groupBy('product.shop_id');

        return $productsByShop;
    }
    public function removeFromCart($user_id, $product_variant_id)
    {
        $cart = Cart::where('user_id', $user_id)->first();

        if (!$cart) {
            return [
                'success' => false
            ];

        }
        $cart->products()->detach($product_variant_id);

        $newQuantity = $cart->products->sum('pivot.quantity');

        return [
            'success' => true,
            'new_Quantity' => $newQuantity
        ];

    }

    public function addToCart($user_id,$product_variant_id, $quantity)
    {
        $cart = Cart::firstOrCreate(['user_id' => $user_id]);
        $existingProduct = $cart->products()->where('product_variant_id', $product_variant_id)->first();

        if ($existingProduct) {
            $cart->products()->updateExistingPivot($product_variant_id, [
                'quantity' => $existingProduct->pivot->quantity + $quantity
            ]);
        } else {
            $cart->products()->attach($product_variant_id, ['quantity' => $quantity]);
        }

        return $cart;
    }
}
