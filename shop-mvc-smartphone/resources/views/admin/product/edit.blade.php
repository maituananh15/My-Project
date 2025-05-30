@extends('admin.layout.main')
@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="table-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-heading">
                            <h5>
                                Sản phẩm / <strong>Chỉnh sửa</strong>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="name" placeholder="Tên sản phẩm">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá</label>
                                <input type="number" name="price" value="{{$product->price}}" class="form-control" id="price" placeholder="Giá">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá sale</label>
                                <input type="number" name="sale" value="{{$product->sale}}" class="form-control" id="price" placeholder="Giá sale">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả</label>
                                <textarea name="description"  class="form-control" id="description" rows="6"
                                          placeholder="Mô tả">{{$product->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Ảnh</label>
                                <input type="file" name="images"  class="form-control" id="image" placeholder="Ảnh">
                            </div>
                            <div style="float: right">
                                <button type="submit" class="btn btn-primary">Tạo mới</button>
                                <a href="{{route('admin.product.index')}}" class="btn btn-danger">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
