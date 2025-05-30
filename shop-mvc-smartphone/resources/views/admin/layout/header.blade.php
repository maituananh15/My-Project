{{--<aside class="left-sidebar">--}}
{{--    <!-- Sidebar scroll-->--}}
{{--    <div>--}}
{{--        <div class="brand-logo d-flex align-items-center justify-content-between">--}}
{{--            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">--}}
{{--                <i class="ti ti-x fs-8"></i>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Sidebar navigation-->--}}
{{--        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">--}}
{{--            <ul id="sidebarnav">--}}
{{--                <li class="sidebar-item item-custom {{ Request::routeIs('admin.product.index') ? 'active' : '' }}">--}}
{{--                    <a class="" href="{{route('admin.product.index')}}" aria-expanded="false">--}}
{{--                <span>--}}
{{--                  <i class="ti ti-cards"></i>--}}
{{--                </span>--}}
{{--                        <span class="hide-menu">Sản phẩm</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item item-custom {{ Request::routeIs('admin.user.index') ? 'active' : '' }}">--}}
{{--                    <a class="" href="{{route('admin.user.index')}}" aria-expanded="false">--}}
{{--                <span>--}}
{{--                  <i class="ti ti-cards"></i>--}}

{{--                </span>--}}
{{--                        <span class="hide-menu">Người dùng</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item item-custom {{ Request::routeIs('admin.order.index') ? 'active' : '' }}">--}}
{{--                    <a class="" href="{{route('admin.order.index')}}" aria-expanded="false">--}}
{{--                <span>--}}
{{--                  <i class="ti ti-cards"></i>--}}

{{--                </span>--}}
{{--                        <span class="hide-menu">Đơn đặt hàng </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--        <!-- End Sidebar navigation -->--}}
{{--    </div>--}}
{{--    <!-- End Sidebar scroll-->--}}
{{--</aside>--}}
{{--<style>--}}
{{--    .left-sidebar .item-custom {--}}
{{--        margin-bottom: 15px;--}}
{{--    }--}}

{{--    /* Định dạng cho các mục chưa được chọn */--}}
{{--    .left-sidebar .item-custom a {--}}
{{--        color: black;--}}
{{--        font-size: 16px;--}}
{{--    }--}}

{{--    .left-sidebar .item-custom.active a {--}}
{{--        color: #007bff;--}}
{{--        font-weight: bold;--}}
{{--    }--}}
{{--</style>--}}


{{--<div id="mySidenav" class="sidenav">--}}
{{--    <a href="{{route('admin.product.index')}}" id="about">Sản Phẩm</a>--}}
{{--    <a href="{{route('admin.user.index')}}" id="blog">Người Dùng</a>--}}
{{--    <a href="{{route('admin.order.index')}}" id="projects">Đơn Đặt Hàng</a>--}}
{{--</div>--}}
{{--<style>--}}
{{--    #mySidenav a {--}}
{{--        position: absolute;--}}
{{--        left: -150px;--}}
{{--        transition: 0.3s;--}}
{{--        padding: 15px;--}}
{{--        width: 200px;--}}
{{--        text-decoration: none;--}}
{{--        font-size: 20px;--}}
{{--        color: white;--}}
{{--        border-radius: 0 5px 5px 0;--}}
{{--    }--}}

{{--    #mySidenav a:hover {--}}
{{--        left: 0;--}}
{{--    }--}}


{{--    #about {--}}
{{--        top: 20px;--}}
{{--        background-color: #04AA6D;--}}
{{--    }--}}

{{--    #blog {--}}
{{--        top: 90px;--}}
{{--        background-color: #2196F3;--}}
{{--    }--}}

{{--    #projects {--}}
{{--        top: 160px;--}}
{{--        background-color: #f44336;--}}
{{--    }--}}

{{--</style>--}}
<div id="mySidenav" class="sidenav">
    <div class="nav-links">
        <a href="{{route('admin.product.index')}}" id="about">Sản Phẩm</a>
        <a href="{{route('admin.user.index')}}" id="blog">Người Dùng</a>
        <a href="{{route('admin.order.index')}}" id="projects">Đơn Đặt Hàng</a>
    </div>
    <div class="logout-container">
        <a href="{{route('logout')}}" class="btn btn-outline-primary mx-3 mt-auto d-block">Đăng xuất</a>
    </div>
</div>
<div id="main">
    <button class="openbtn" onclick="toggleNav()">&#9776;</button>
</div>

<style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.4s;
        padding-top: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Tạo khoảng trống giữa các phần tử */
    }
    .nav-links {
        display: flex;
        flex-direction: column; /* Để các mục ở dưới nhau */
    }
    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border-radius: 9px;
        border: none;
        visibility: visible;
    }
    .sidenav a {
        padding: 10px 15px;
        margin: 5px 0;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .sidenav a:hover {
        font-size: 1.6em;
        font-weight: bold;
        background-color: #f1f1f1;
        color: red;
        border-radius: 9px;
        text-decoration: none;
    }
    .logout-container {
        margin-top: auto;
    }
    .openbtn:hover {
        background-color: #444;
    }
    #main {
        transition: margin-left .5s;
        padding: 16px;
    }
</style>

<script>
    function toggleNav() {
        const sidenav = document.getElementById("mySidenav");
        const main = document.getElementById("main");
        if (sidenav.style.width === "250px") {
            sidenav.style.width = "0";
            main.style.marginLeft = "0";
        } else {
            sidenav.style.width = "250px";
            main.style.marginLeft = "250px";
        }
    }
</script>

