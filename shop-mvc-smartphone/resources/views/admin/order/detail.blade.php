@php use App\Models\Order; @endphp
@extends('admin.layout.main')
@section('content')
    <div class="body-wrapper my-3">
        <div class="table-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-heading">
                        <h2>Chi tiết <strong>Đơn Đặt Hàng</strong></h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if($order)
                        <p class="card-text">
                            <b>ID:</b>
                            ORD000{{$order->id ?? ''}}
                        </p>
                        <p class="card-text">
                            <b>Người đặt:</b>
                            {{$order->user->name ?? ''}}
                        </p>
                        <p class="card-text">
                            <b>Người nhận:</b>
                            {{$order->shipping_name ?? ''}}
                        </p>
                        <p class="card-text">
                            <b>Địa chỉ:</b>
                            {{$order->shipping_address ?? ''}}
                        </p>
                        <p class="card-text">
                            <b>Số điện thoại:</b>
                            {{$order->shipping_phone ?? ''}}
                        </p>
                        <p class="card-text">
                            <b>Tổng giá tiền:</b>
                            {{number_format($order->total ?? '', 0, ',', '.')}} VNĐ
                        </p>
                        <p class="card-text">
                            <b>Trạng thái:</b>
                            {{Order::STATUSES[$order->status ?? '']}}
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <a href="{{route('admin.order.index')}}" class="btn btn-primary">Back</a>
    </div>
@endsection
