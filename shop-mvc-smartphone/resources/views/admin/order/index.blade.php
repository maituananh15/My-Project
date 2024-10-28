@php use App\Models\Order; @endphp
@extends('admin.layout.main')
@section('content')
    @if(session('success'))
        <script>
            swal({
                title: 'Thành công!',
                text: "{{session('success')}}",
                icon: "success",
                button: 'OK',
            });
        </script>
    @endif
    <div class="body-wrapper">
{{--        @include('admin.layout.auth')--}}
        <!--  Header End -->
        <div class="container-fluid">
            <div class="table-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-heading">
                            <h5>Đơn hàng / <strong>Danh sách</strong></h5>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Người đặt</th>
                        <th scope="col">Tên người nhận</th>
{{--                        <th scope="col">Địa chỉ người nhận</th>--}}
{{--                        <th scope="col">Số điện thoại người nhận</th>--}}
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="row">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{$order->id ?? ''}}</th>
                            <td>ORD000{{$order->id ?? ''}}</td>
                            <td>{{$order->user->name ?? ''}}</td>
                            <td>{{$order->shipping_name ?? ''}}</td>
{{--                            <td>{{$order->shipping_address ?? ''}}</td>--}}
{{--                            <td>{{$order->shipping_phone ?? ''}}</td>--}}
                            <td>{{number_format($order->total ?? '', 0, ',', '.')}} VNĐ</td>
                            <td>{{Order::STATUSES[$order->status ?? '']}}</td>
                            <td>
                                <a href="{{route('admin.order.detail', $order->id)}}" class="btn btn-success">
                                    <i class='bx bxs-user'></i>
                                </a>
                                <a href="{{route('admin.order.edit', $order->id)}}" class="btn btn-primary">
                                    <i class='bx bxs-edit'></i>
                                </a>
                                <a href="{{route('admin.order.destroy', $order->id)}}" class="btn btn-danger"
                                   onclick="return confirm('Bạn muốn xóa không? Mã: {{ $order->id }}');">
                                    <i class='bx bx-trash'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
