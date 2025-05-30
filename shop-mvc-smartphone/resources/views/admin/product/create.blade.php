@extends("admin.layout.main")
@section('content')
    <div class="body-wrapper">
            <div class="container-fluid">
                <div class="table-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-heading">
                                Sản phẩm / <strong>Tạo mới</strong>
                            </div>
                        </div>
                    </div>
                <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-control">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-control">Giá</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Giá">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sale" class="form-control">Sale</label>
                                        <input type="number" class="form-control" id="sale" name="sale" placeholder="Giá sale">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-control">Mô tả</label>
                                        <textarea name="description" id="description"  rows="6" class="form-control" placeholder="Mô tả"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="images" class="form-control">Ảnh</label>
                                        <input type="file" class="form-control" id="images" name="images" placeholder="Ảnh">
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
