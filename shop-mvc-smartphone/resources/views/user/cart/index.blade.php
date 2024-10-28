@extends('user.home.product')
@section('content')
    @if (session('success'))
        <script>
            swal({
                title: "Thành công!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        </script>
    @endif
    <div class="amado_product_area section-padding-0-100">
        @if(session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="mup">
        @if($carts->isEmpty())
            <a href="{{ route('user.shop.index') }}">
                <p>Giỏ hàng của bạn hiện đang trống. Vui lòng thêm sản phẩm vào giỏ hàng.</p>
            </a>
        @else
            <div class="product">
                <h2>Giỏ Hàng</h2>
            </div>
            <div class="nami">
                <form action="{{ route('user.cart.update') }}" method="POST">
                    @csrf
                    <table>
                        <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $cart)
                            <tr>
                                <td class="ivan">
                                    <a href="#"><img src="{{ isset($cart['images']) ? asset($cart['images']) : asset('default-image.jpg') }}" alt="not_image"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ $cart['name'] ?? '' }}</h5>
                                </td>
                                <td class="price">
                                    <span>{{ number_format($cart['price'] ?? 0, 0, ',', '.') }} VNĐ</span>
                                </td>
                                <td class="qty">
                                    <input type="hidden" name="cartItems[{{ $loop->index }}][id]" value="{{ $cart['id'] ?? '' }}">
                                    <input type="number" name="cartItems[{{ $loop->index }}][quantity]" value="{{ $cart['quantity']}}" min="1" style="width: 60px;">
                                </td>
                                <td class="func">
                                    <a href="{{ route('user.cart.destroy', $cart['id'] ?? ' ') }}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa không? Mã: {{ $cart['id'] ?? ''}}');">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="func">
                        <button type="submit" class="success">Cập nhập</button>
                    </div>
                </form>
                <div class="usop">
                    <div>
                        <h3>Cart Total</h3>
                    </div>
                    <div>
                        <ul class="summary-table">
                            <li><span>Tổng giá trị sản phẩm:</span> <span>{{ number_format($totalPrice, 0, ',', '.') }} VNĐ</span></li>
                            <li><span>Vận chuyển:</span> <span>Free</span></li>
                            <li><span>Tổng tiền:</span> <span>{{ number_format($totalPrice, 0, ',', '.') }} VNĐ</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <form action="{{ route('user.order.create') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn amado-btn w-100">Xác nhận đơn hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="#" class="scroll-to-top" id="scrollToTop">
                    <i class='bx bx-chevron-up'></i>
                </a>
            </div>
        @endif
    </div>
@endsection
