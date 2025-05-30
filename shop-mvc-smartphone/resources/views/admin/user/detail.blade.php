@php use App\Models\User; @endphp
@extends('admin.layout.main')
@section('content')
    <div class="body-wrapper my-3">
        <div class="table-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-heading">
                        <h2>Chi tiết <strong>Người Dùng</strong></h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if($user)
                        <p class="card-text">
                            <b>ID:</b>
                            {{$user->id}}
                        </p>
                        <p class="card-text">
                            <b>Tên:</b>
                            {{$user->name}}
                        </p>
                        <p class="card-text">
                            <b>Số điện thoại:</b>
                            {{$user->phone}}
                        </p>
                        <p class="card-text">
                            <b>Email:</b>
                            {{$user->email}}
                        </p>
                        <p class="card-text">
                            <b>Chức vụ:</b>
                            {{$user->role ? User::ARRAY_ROLE[$user->role] : ''}}
                        </p>
                        <p class="card-text">
                            <b>Địa chỉ:</b>
                            {{$user->address}}
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <a href="{{route('admin.user.index')}}" class="btn btn-primary">Back</a>
    </div>
@endsection
