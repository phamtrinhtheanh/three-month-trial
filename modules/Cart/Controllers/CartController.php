<?php

namespace Modules\Cart\Controllers;

use Modules\Cart\CartService;

use Illuminate\Http\Request;
use Modules\Cart\Requests\CartRequest;
use Auth;
use Modules\Cart\Models\Cart;


class CartController
{
    protected $cartService;
    protected $totalquantity;
    public function __construct(
        CartService $cartService,

    ) {
        $this->cartService = $cartService;

    }

    public function getCart()
    {
        if (!Auth::check()) {
            return abort(403, 'Bạn không có quyền truy cập giỏ hàng.');
        }
        $cart = $this->cartService->getCartDetails($user_id = Auth::user()->id);

        if (!$cart) {
            return abort(404, 'Không tìm thấy giỏ hàng');
        }

        $productsByShop = $this->cartService->groupProductsByShop($cart);

        return view('Cart::frontend.ViewCartUI', compact('cart', 'productsByShop'));
    }
    public function removeFromCart(CartRequest $request)
    {
        $user_id = Auth::id();
        $product_variant_id = $request->input('product_variant_id');
        $result = $this->cartService->removeFromCart($user_id, $product_variant_id);

        if (!$result['success']) {

            return response()->json([
                'success' => false
            ]);
        }
        return response()->json([
            'success' => true,
            'new_Quantity' => $result['new_Quantity']
        ]);

    }
    public function addToCart(CartRequest $request)
    {
        if (!Auth::check()) {
            return abort(403, 'Bạn không có quyền thêm vào giỏ hàng này.');
        }
        $user_id = Auth::id();
        $product_variant_id = $request->input('product_variant_id');
        $quantity = $request->input('quantity');

        $cart = $this->cartService->addToCart($user_id, $product_variant_id, $quantity);

        if (!$cart) {
            return abort(404);
        } else {
            return response()->json(['successful' => true]);
        }
    }



}
