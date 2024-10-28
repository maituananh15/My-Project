@extends('admin.layout.main')
@section('content')
    <div class="body-wrapper">
        <div class="content-fluid my-3">
            <div class="row">
                <div class="table-container">
                    <div class="col-md-6">
                        <div class="table-heading">
                            <h2>Chi tiết <strong>Sản Phẩm</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if($product)
                            <p class="card-text">
                                <b>Tên:</b>
                                {{$product->name}}
                            </p>
                            <p class="card-text">
                                <b>Giá:</b>
                                {{number_format($product->price), '0', ',','.'}} VNĐ
                            </p>
                            <p class="card-text">
                                <b>Mô tả:</b>
                                {{$product->description}}
                            </p>
                            <p class="card-text">
                                <b>Ảnh:</b>
                                <img width="300px" height="250px" src="{{asset($product->images)}}" alt="not_images">
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <a href="{{route('admin.product.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

@endsection
