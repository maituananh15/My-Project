<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;


class ShopController extends Controller
{
    public function index():Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::all();
        return view('user.shop.index', [
            'products' => $products
        ]);
    }

    public function addToCart($product_id, $quantity): RedirectResponse
    {
        try {
            // Lấy thông tin sản phẩm
            $product = Product::findOrFail($product_id);

            // Lấy giỏ hàng từ session
            $cart = session()->get('cart', []);

            // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
            if (isset($cart[$product_id])) {
                // Cập nhật số lượng
                $cart[$product_id]['quantity'] += $quantity; // Tăng thêm số lượng
            }
            else {
                // Nếu chưa có, thêm mới
                $cart[$product_id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'images' => $product->images ?? '',
                    'quantity' => $quantity
                ];
            }

            // Lưu giỏ hàng vào session
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
        }
    }


}
