<div class="body-wrapper my-5 ms-5">
    <div class="container-fluid">
        <div class="table-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-heading">
                        Khách Hàng / <strong>Tạo mới</strong>
                    </div>
                </div>
            </div>
            <div class="card w-100">
                <div class="card-body w-100 p-5">
                    <form action="Modules/quanlynd/xuly.php" method="post">

                        <!-- Tên Khách Hàng -->
                        <div class="mb-3">
                            <label for="ten_dang_nhap" class="form-label"><b>Tên Khách Hàng</b></label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                                placeholder="Tên Khách Hàng" required>
                        </div>

                        <!-- Mật Khẩu -->
                        <div class="mb-3">
                            <label for="mat_khau" class="form-label"><b>Mật Khẩu</b></label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau"
                                placeholder="Mật Khẩu" required  readonly onfocus="this.removeAttribute('readonly');">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                required  readonly onfocus="this.removeAttribute('readonly');">
                        </div>

                        <!-- Số Điện Thoại -->
                        <div class="mb-3">
                            <label for="so_dien_thoai" class="form-label"><b>Số Điện Thoại</b></label>
                            <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai"
                                placeholder="Nhập Số Điện Thoại" required>
                        </div>

                        <!-- Địa Chỉ -->
                        <div class="mb-3">
                            <label for="dia_chi" class="form-label"><b>Địa Chỉ</b></label>
                            <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="Địa Chỉ" required>
                        </div>

                        <div class="mb-3 row">
                            <!-- Giới Tính -->
                            <div class="col-md-4">
                                <label for="gioi_tinh" class="form-label"><b>Giới Tính</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="gioi_tinh_nam" name="gioi_tinh"
                                        value="Nam" checked>
                                    <label class="form-check-label" for="gioi_tinh_nam">Nam</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="gioi_tinh_nu" name="gioi_tinh"
                                        value="Nữ">
                                    <label class="form-check-label" for="gioi_tinh_nu">Nữ</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="gioi_tinh_khac" name="gioi_tinh"
                                        value="Khác">
                                    <label class="form-check-label" for="gioi_tinh_khac">Khác</label>
                                </div>
                            </div>

                            <!-- Ngày Sinh -->
                            <div class="col-md-4">
                                <label for="ngay_sinh" class="form-label"><b>Ngày Sinh</b></label>
                                <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" required>
                            </div>

                            <!-- Quốc Tịch -->
                            <div class="col-md-4">
                                <label for="quoc_tich" class="form-label"><b>Quốc Tịch</b></label>
                                <input type="text" class="form-control" id="quoc_tich" name="quoc_tich"
                                    placeholder="Quốc Tịch" value="Việt Nam" required>
                            </div>
                           <!-- Sở Thích -->
                            <div class="mb-3">
                                <label class="form-label"><b>Sở Thích</b></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Đọc sách" id="st_doc_sach">
                                    <label class="form-check-label" for="st_doc_sach">Đọc sách</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Xem phim" id="st_xem_phim">
                                    <label class="form-check-label" for="st_xem_phim">Xem phim</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Nghe nhạc" id="st_nghe_nhac">
                                    <label class="form-check-label" for="st_nghe_nhac">Nghe nhạc</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Bóng đá" id="st_bong_da">
                                    <label class="form-check-label" for="st_bong_da">Bóng đá</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Cầu lông" id="st_cau_long">
                                    <label class="form-check-label" for="st_cau_long">Cầu lông</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="so_thich[]" value="Bóng chuyền" id="st_bong_chuyen">
                                    <label class="form-check-label" for="st_bong_chuyen">Bóng chuyền</label>
                                </div>
                            </div>
                            <!-- Mô Tả -->
                            <div class="mb-3">
                                <label for="mo_ta" class="form-label"><b>Mô Tả</b></label>
                                <textarea class="form-control" id="mo_ta" name="mo_ta" rows="4" placeholder="Mô tả thêm về khách hàng..." required></textarea>
                            </div>

                        </div>

                        <!-- Số lần mua -->
                        <div class="mb-3">
                            <label for="so_lan_mua" class="form-label"><b>Số lần mua</b></label>
                            <input type="number" class="form-control" id="so_lan_mua" name="so_lan_mua" value="0" min="0">
                        </div>

                        <!-- Tổng giá trị mua -->
                        <div class="mb-3">
                            <label for="tong_gia_tri_mua" class="form-label"><b>Tổng giá trị mua</b></label>
                            <input type="number" step="0.01" class="form-control" id="tong_gia_tri_mua" name="tong_gia_tri_mua" value="0.00" min="0">
                        </div>

                        <!-- Lần cuối mua -->
                        <div class="mb-3">
                            <label for="lan_cuoi_mua" class="form-label"><b>Lần cuối mua</b></label>
                            <input type="date" class="form-control" id="lan_cuoi_mua" name="lan_cuoi_mua">
                        </div>

                        <!-- Xếp hạng -->
                        <div class="mb-3">
                            <label for="xep_hang" class="form-label"><b>Xếp hạng</b></label>
                            <select name="xep_hang" id="xep_hang" class="form-control">
                                <option value="">-- Chọn xếp hạng --</option>
                                <option value="Thân Thiết">Thân Thiết</option>
                                <option value="Bạc">Bạc</option>
                                <option value="Vàng">Vàng</option>
                                <option value="Kim Cương">Kim Cương</option>
                                <option value="Vip">Vip</option>
                            </select>
                        </div>

                        <!-- Trạng Thái -->
                        <div class="mb-3">
                            <label for="trang_thai" class="form-label"><b>Trạng Thái</b></label>
                            <select name="trang_thai" id="trang_thai" class="form-control" required>
                                <option value="1">Đã Xác Minh</option>
                                <option value="0" selected>Chưa Xác Minh</option>
                            </select>
                        </div>

                        <!-- Nút Gửi và Hủy -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2" name="them">Tạo mới</button>
                            <a href="index.php?action=quanlynd&query=lietke" class="btn btn-danger ml-2 ajax-link">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>