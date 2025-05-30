<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CheckoutController extends Controller
{
    public function indexCart(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        // Lấy giỏ hàng từ session
        $carts = session()->get('cart', []);
        $totalPrice = $this->calculateTotalPrice($carts);

        return view('user.cart.index', [
            'carts' => Collect($carts),
            'totalPrice' => $totalPrice
        ]);
    }
    public function destroy($id): RedirectResponse
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Xóa sản phẩm khỏi giỏ hàng
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Cập nhật lại session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function indexCheckout(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Lấy giỏ hàng từ session
        $carts = session()->get('cart', []);

        $totalPrice = $this->calculateTotalPrice($carts);

        return view('user.order.checkout', [
            'cartItems' => $carts,
            'totalPrice' => $totalPrice,
            'orderId' => session()->get('orderId')
        ]);
    }

    public function createOrder(): RedirectResponse
    {
        return redirect()->route('user.order.checkout');
    }



    public function updateCart(Request $request): RedirectResponse
    {
        // Lấy tất cả các ID sản phẩm và số lượng từ yêu cầu
        $cartItems = $request->input('cartItems'); // Giả định rằng bạn sẽ gửi một mảng với các ID sản phẩm và số lượng

        // Lấy giỏ hàng hiện tại từ session
        $carts = session('cart', []);

        // Cập nhật từng sản phẩm trong giỏ hàng
        foreach ($cartItems as $item) {
            $id = $item['id'];
            $quantity = $item['quantity'];

            // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
            if (isset($carts[$id])) {
                // Cập nhật số lượng
                $carts[$id]['quantity'] = $quantity;
            }
        }

        // Lưu lại giỏ hàng đã cập nhật vào session
        session(['cart' => $carts]);

        // Tính lại tổng giá trị giỏ hàng sau khi cập nhật số lượng
        $totalPrice = $this->calculateTotalPrice($carts);

        return redirect()->route('user.cart.index')->with([
            'success' => 'Cập nhật số lượng thành công',
            'totalPrice' => $totalPrice
        ]);
    }

    public function calculateTotalPrice(): float|int
    {
        $carts = session()->get('cart', []); // Lấy giỏ hàng từ session
        $totalPrice = 0;

        foreach ($carts as $cart) {
            // Đảm bảo khóa price và quantity tồn tại
                $totalPrice += $cart['price'] * $cart['quantity'];
        }

        return $totalPrice;
    }


    public function indexConfirmation(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $userId = Auth::id();
        $order = Order::where('user_id', $userId)->first();

        if (!$order) {
            return view('user.order.confirmation', [
                'totalPrice' => 0,
                'order' => null,
                'cartItems' => collect(),
                'orderId' => null
            ]);
        }

        $totalPrice = $this->calculateTotalPrice();
        $orderId = $order->id;
        $cartItems = Cart::where('order_id', $orderId)->get();

        return view('user.order.confirmation', [
            'totalPrice' => $totalPrice,
            'order' => $order,
            'cartItems' => $cartItems,
            'orderId' => $orderId
        ]);
    }
    public function approvedOrder(Request $request): RedirectResponse
    {
        // Xác thực dữ liệu từ form
        $validatedData = $request->validate([
            'shipping_name' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
            'shipping_phone' => 'required|string|max:15',
            'shipping_note' => 'nullable|string|max:1000',
        ]);

        // Tạo đơn hàng mới
        $cartItems = session()->get('cart', []);
        $totalPrice = $this->calculateTotalPrice($cartItems);

        $order = new Order();
        $order->user_id = Auth::id();
        $order->total = $totalPrice;
        $order->shipping_name = $validatedData['shipping_name'];
        $order->shipping_address = $validatedData['shipping_address'];
        $order->shipping_phone = $validatedData['shipping_phone'];
        $order->shipping_note = $validatedData['shipping_note'];
        $order->status = 'pending'; // Trạng thái mặc định
        $order->save();

        // Gán mã đơn hàng và lưu lại
        $order->code = 'K' . $order->id;
        $order->save();

        // Lưu các sản phẩm vào bảng Cart với order_id
        foreach ($cartItems as $item) {
            Cart::create([
                'product_id' => $item['id'],
                'user_id' => Auth::id(),
                'quantity' => $item['quantity'],
                'order_id' => $order->id // Gán order_id cho các sản phẩm
            ]);
        }

        // Xóa giỏ hàng trong session
        session()->forget('cart');

        // Chuyển hướng đến trang xác nhận
        return redirect()->route('user.order.confirmation')->with('success', 'Đơn hàng của bạn đã được tạo!');
    }
    public function destroyCart($orderId): RedirectResponse
    {
        // Xóa tất cả sản phẩm trong bảng Cart có order_id tương ứng với orderId
        Cart::where('order_id', $orderId)->delete();

        // Lấy user_id của người dùng hiện tại
        $userId = auth()->id();

        // Xóa tất cả đơn hàng của người dùng hiện tại
        Order::where('user_id', $userId)->delete();

        // Chuyển hướng về trang xác nhận với thông báo thành công
        return redirect()->route('user.order.confirmation')->with('success', 'Cảm ơn bạn đã ủng hộ Chúng Tôi.');
    }


}


