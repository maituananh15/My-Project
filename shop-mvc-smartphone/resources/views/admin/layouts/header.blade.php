<header>
    <div class="head-top">
        <div class="logo">
            <a href="/">
                <img src="/Picture/logo.png" alt="logo-shop">
            </a>
        </div>
        <div class="menu">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <ul>
                    <li>
                        <a href="/"><b>TRANG CHỦ</b> </a>
                    </li>
                    <li {{ Request::routeIs('admin.layouts.product') ? 'active' : '' }}>
                        <a href="{{route('admin.layouts.product')}}"><b>SẢN PHẨM</b> </a>
                    </li>
                    <li {{Request::routeIs('login.index') ? 'active' : ' '}}>
                        <a href="{{Route('login.index')}}"><b>ĐĂNG NHẬP</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
