<header>
    <div class="head-top">
        <div class="logo">
            <a href="/user">
                <img src="/Picture/logo.png" alt="logo-shop">
            </a>
        </div>
        <nav class="menu">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <ul>
                    <li>
                        <a href="/user"><b>TRANG CHỦ</b></a>
                    </li>
                    <li class="{{ Request::routeIs('user.shop.index') ? 'active' : '' }}">
                        <a href="{{route('user.shop.index')}}"><b>SẢN PHẨM</b></a>
                    </li>
                    <li>
                        <a href="{{route('user.cart.index')}}">
                            <b>GIỎ HÀNG</b>
                        </a>
                    </li>
                    @if(auth()->user())
                        <li class="{{ Request::routeIs('user.order.confirmation') ? 'active' : '' }}">
                            <a href="{{route('user.order.confirmation')}}"><b>ĐƠN HÀNG CỦA BẠN</b></a>
                        </li>
                    @else
                        <li><a href="{{route('login.index')}}">Đăng nhập</a></li>
                    @endif
                    <li class="dropdown" tabindex="0" style="margin-top: -5px">
                        <a href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/images/profile/user-1.jpg" alt="User Profile" width="35" height="35" class="rounded-circle profile-image">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop2">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-user fs-6"></i>
                                    <span class="fs-3">{{auth()->user()->name ?? 'Guest'}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
