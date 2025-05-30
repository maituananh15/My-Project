<nav class="navbar navbar-expand-lg" style="background-color:rgb(119, 160, 192);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white ajax-link" aria-current="page" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Quản Lý Khách Hàng
                    </a>
                    <ul class="dropdown-menu">
                        <a href="index.php?action=quanlynd&query=lietke" class="dropdown-item ajax-link">📋 Danh sách</a>
                        <a href="index.php?action=quanlynd&query=them" class="dropdown-item ajax-link">➕ Thêm mới</a>
                        <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#searchModal">🔍 Tìm kiếm</a>
                    </ul>
                </li>
            </ul>

            <!-- Form tìm kiếm
            <form class="d-flex" role="search" action="index.php?action=quanlynd&query=timkiem" method="POST">
                <input class="form-control me-2" type="search" placeholder="Tìm Kiếm" name="tukhoa" aria-label="Search"
                    autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                <button class="btn btn-outline-success text-white" type="submit" name="timkiem">
                    <i class='bx bx-search-alt'></i>
                </button>
            </form> -->

            <!-- Nút Đăng Xuất -->
            <a href="../index.php" class="btn btn-danger ms-3">
                <i class='bx bx-log-out'></i> Đăng Xuất
            </a>
        </div>
    </div>
</nav>


<!-- Modal Tìm kiếm -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light rounded-4 shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">🔍 Tìm kiếm thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>
            <form action="index.php?action=quanlynd&query=timkiem" method="POST">
                <div class="modal-body">
                    <input type="text" class="form-control" name="tukhoa" placeholder="Nhập từ khóa..."
                        autocomplete="off">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="timkiem" class="btn btn-primary">Tìm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
