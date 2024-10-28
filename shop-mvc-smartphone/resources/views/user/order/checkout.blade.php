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
    <div class="chopper">
        <div class="brook">
            <div class="franky">
                <div class="ace">
                    <h2> Xác nhận đơn hàng </h2>
                </div>
                <form action="{{route('user.approvedOrder')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="sabo">
                            <input type="text" name="shipping_name" class="form-control" id="first_name" value="" placeholder="Tên người nhận" required>
                        </div>
                        <div class="sabo">
                            <input type="text" name="shipping_address" class="form-control" id="company" placeholder="Địa chỉ nhận hàng" value="">
                        </div>
                        <div class="sabo">
                            <input type="text" name="shipping_phone" class="form-control" id="phone" placeholder="SĐT người nhận" value="">
                        </div>
                        <div class="sabo">
                            <textarea name="shipping_note" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Hãy để lại lời nhắn của bạn"></textarea>
                        </div>
                        <div class="sabo button-group"> <!-- Thay đổi ở đây -->
                            <button type="submit" class="btn amado-btn">Xác nhận</button>
                            <a href="{{ route('user.cart.index') }}" class="btn btn-cancel">Hủy</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="gaban">
            <div class="garp">
                <h5>Giá trị đơn hàng</h5>
                <ul class="dragon">
                    <li><span>Tổng giá trị:</span> <span>{{number_format($totalPrice, 0, ',', '.')}} VNĐ</span></li>
                    <li><span>Vận chuyển:</span> <span>Free</span></li>
                    <li><span>Giá tiền:</span> <span>{{number_format($totalPrice, 0, ',', '.')}} VNĐ</span></li>
                </ul>
            </div>
        </div>
        <a href="#" class="scroll-to-top" id="scrollToTop">
            <i class='bx bx-chevron-up'></i>
        </a>
    </div>
@endsection
