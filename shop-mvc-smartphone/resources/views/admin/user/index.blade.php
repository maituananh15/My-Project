@php use App\Models\User; @endphp
@extends('admin.layout.main')
@section('content')
    @if(session('success'))
        <script>
            swal({
                title:"Thành công!",
                text:"{{session('success')}}",
                icon:"success",
                button:"OK",
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
                            <h5>Người dùng / <strong>Danh sách</strong></h5>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center mb-2">
                        <a href="{{route('admin.user.create')}}" class="btn btn-secondary add-button">Thêm Người
                            dùng</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Quyền</th>
                        <th scope="row" width="20%">Địa chỉ</th>
                        <th scope="row">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $item)
                        <tr>
                            <th scope="row">{{$item->id ?? ''}}</th>
                            <td>{{$item->name ?? ''}}</td>
                            <td>{{$item->phone ?? ''}}</td>
                            <td>{{$item->email ?? ''}}</td>
                            <td>{{$item->role ? User::ARRAY_ROLE[$item->role] : ''}}</td>
                            <td>{{$item->address ?? ''}}</td>
                            <td>
                                <a href="{{route('admin.user.detail', $item->id)}}" class="btn btn-success">
                                    <i class='bx bxs-user'></i>
                                </a>
                                <a href="{{route('admin.user.edit', $item->id)}}" class="btn btn-primary">
                                    <i class='bx bxs-edit'></i>
                                </a>
                                <a href="{{route('admin.user.destroy', $item->id)}}" class="btn btn-danger">
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
