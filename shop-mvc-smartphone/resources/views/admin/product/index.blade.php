@php use App\Models\Product; @endphp
@extends('admin.layout.main')
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
    <div class="body-wrapper">
{{--        @include('admin.layout.auth')--}}
        <div class="container-fluid">
            <div class="table-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-heading">
                            <h5>Sản phẩm / <strong>Danh sách</strong></h5>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center mb-2">
                        <a href="{{route('admin.product.create')}}" class="btn btn-secondary add-button">Thêm San pham
                            dùng</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th class="d-none d-xl-table-cell">Tên sản phẩm</th>
                        <th class="d-none d-xl-table-cell">Giá</th>
                        <th class="d-none d-xl-table-cell">Mô tả</th>
                        <th class="d-none d-xl-table-cell">Ảnh</th>
                        <th class="d-none d-xl-table-cell">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $item)
                            <tr>
                                <td class="d-none d-xl-table-cell">{{$key+1}}</td>
                                <td class="d-none d-xl-table-cell">{{$item->name ??  ''}}</td>
                                <td class="d-none d-xl-table-cell">{{number_format($item->price, 0, ',', '.')}} VNĐ</td>
                                <td class="d-none d-xl-table-cell">{{$item->description ?? ''}}</td>
                                <td class="d-none d-xl-table-cell">
                                    <img width="100px" height="80px" src="{{$item->images}}" alt="not_image">
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a href="{{route('admin.product.detail', $item->id)}}" class="btn btn-success">
                                        <i class='bx bxs-user'></i>
                                    </a>
                                    <a href="{{route('admin.product.edit', $item->id)}}" class="btn btn-primary">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a href="{{route('admin.product.destroy', $item->id)}}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa không? Mã: {{ $item->id }}');">
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
