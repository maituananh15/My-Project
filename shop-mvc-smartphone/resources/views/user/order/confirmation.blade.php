@php use App\Models\Order; @endphp
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
    <div class="akainu">
        @if($cartItems->isEmpty() || $order == null)
            <a href="{{route('user.cart.index')}}"><p>Không có sản phẩm nào trong đơn hàng.</p></a>
        @else
            @if($order->status === Order::STATUS_COMPLETED)
                <p>Đơn hàng đã được giao thành công!</p>
                <p>Bạn thấy sản phẩm chúng tôi được chứ?</p>
                <form action="{{ route('user.cart.destroyCart', $order->id )}}" method="POST" style="margin-top: 30px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="success">OK</button>
                </form>
            @else
                <div class="aokiji">
                    <div class="kizaru">
                        <div class="mihark">
                            <h5>Đơn hàng của bạn ở trạng thái:
                                <strong style="color: #4CAF50 ;font-size: 30px">{{Order::STATUSES[$order->status]}}</strong></h5>
                        </div>
                        <table class="goku">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->product->name ?? ''}}</td>
                                        <td>{{$item->quantity ?? ''}}</td>
                                        <td>{{number_format($item->product->price ?? 0, 0, ',', '.')}} VNĐ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="kaido">
                    <div class="bigmom">
                        <h5>Giá trị đơn hàng</h5>
                        <ul class="katakuri">
                            <li>
                                <span>Tổng giá trị sản phẩm:</span>
                                <span>{{number_format($order->total, 0, ',', '.')}} VNĐ</span>
                            </li>
                            <li>
                                <span>Vân chuyển:</span>
                                <span>Free</span>
                            </li>
                            <li>
                                <span>Tổng tiền:</span>
                                <span>{{number_format($order->total, 0, ',', '.')}} VNĐ</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="scroll-to-top" id="scrollToTop">
                    <i class='bx bx-chevron-up'></i>
                </a>
            @endif
        @endif
    </div>
@endsection
