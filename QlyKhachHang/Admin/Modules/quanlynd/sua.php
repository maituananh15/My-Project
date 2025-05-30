<?php 
    $id = $_GET['id'];
    $sql_sua = "SELECT * FROM khach_hang WHERE id = '$id' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
?>

<div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4>Chỉnh sửa thông tin khách hàng</h4>
        </div>
        <div class="card-body">
            <?php while($row = mysqli_fetch_array($query_sua)) { ?>
            <form method="POST" action="Modules/quanlynd/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label class="form-label"><b>Họ</b></label>
                    <input type="text" name="ho" class="form-control" value="<?= $row['ho'] ?>">
                </div>
                <div class="mb-3">
                    <label for="ten" class="form-label"><strong>Tên</strong></label>
                    <input type="text" name="ten" class="form-control" value="<?= $row['ten'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label"><b>Số điện thoại</b></label>
                    <input type="text" name="so_dien_thoai" class="form-control" value="<?= $row['so_dien_thoai'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Địa chỉ</b></label>
                    <input type="text" name="dia_chi" class="form-control" value="<?= $row['dia_chi'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Giới tính</b></label>
                    <select name="gioi_tinh" class="form-control">
                        <option value="Nam" <?= $row['gioi_tinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
                        <option value="Nữ" <?= $row['gioi_tinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
                        <option value="Khác" <?= $row['gioi_tinh'] == 'Khác' ? 'selected' : '' ?>>Khác</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Ngày sinh</b></label>
                    <input type="date" name="ngay_sinh" class="form-control" value="<?= $row['ngay_sinh'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Email</b></label>
                    <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Mật khẩu</b></label>
                    <input type="password" name="mat_khau" class="form-control" value="<?= $row['mat_khau'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Quốc tịch</b></label>
                    <input type="text" name="quoc_tich" class="form-control" value="<?= $row['quoc_tich'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Sở thích</strong></label>
                    <div class="form-check">
                        <?php
                        // Lấy sở thích hiện tại từ CSDL
                        $current_hobbies = explode(', ', $row['so_thich']);
                        
                        // Danh sách tất cả sở thích có thể chọn
                        $all_hobbies = ['Đọc sách', 'Xem phim', 'Nghe nhạc', 'Bóng đá', 'Cầu lông', 'Bóng chuyền'];
                        
                        foreach ($all_hobbies as $hobby) {
                            $checked = in_array(trim($hobby), $current_hobbies) ? 'checked' : '';
                            echo '
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="so_thich[]" 
                                    id="hobby_'.mb_strtolower(str_replace(' ', '_', $hobby)).'" 
                                    value="'.$hobby.'" '.$checked.'>
                                <label class="form-check-label" for="hobby_'.mb_strtolower(str_replace(' ', '_', $hobby)).'">
                                    '.$hobby.'
                                </label>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
                                <div class="mb-3">
                    <label for="mo_ta" class="form-label"><strong>Mô Tả</strong></label>
                    <textarea name="mo_ta" class="form-control" rows="5"><?= $row['mo_ta'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="so_lan_mua" class="form-label"><strong>Số Lần Mua</strong></label>
                    <input type="number" name="so_lan_mua" class="form-control" value="<?= $row['so_lan_mua'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tong_gia_tri_mua" class="form-label"><strong>Tổng Giá Trị Mua</strong></label>
                    <input type="number" name="tong_gia_tri_mua" class="form-control" value="<?= $row['tong_gia_tri_mua'] ?>">
                </div>
                <div class="mb-3">
                    <label for="lan_cuoi_mua" class="form-label"><strong>Lần Cuối Mua</strong></label>
                    <input type="date" name="lan_cuoi_mua" class="form-control" value="<?= $row['lan_cuoi_mua'] ?>">
                </div>
                <div class="mb-3">
                    <label for="xep_hang" class="form-label"><strong>Xếp Hạng</strong></label>
                    <select name="xep_hang" id="xep_hang" class="form-control">
                        <option value="Thân Thiết" <?= $row['xep_hang'] == 'Thân Thiết' ? 'selected' : '' ?>>Thân Thiết</option>
                        <option value="Bạc" <?= $row['xep_hang'] == 'Bạc' ? 'selected' : '' ?>>Bạc</option>
                        <option value="Vàng" <?= $row['xep_hang'] == 'Vàng' ? 'selected' : '' ?>>Vàng</option>
                        <option value="Kim Cương" <?= $row['xep_hang'] == 'Kim Cương' ? 'selected' : '' ?>>Kim Cương</option>
                        <option value="Vip" <?= $row['xep_hang'] == 'Vip' ? 'selected' : '' ?>>Vip</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"><b>Trạng thái</b></label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" <?= $row['trang_thai'] == 1 ? 'selected' : '' ?>>Đã xác minh</option>
                        <option value="0" <?= $row['trang_thai'] == 0 ? 'selected' : '' ?>>Chưa xác minh</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" name="sua" class="btn btn-success ">Cập nhật</button>
                    <button type="button" onclick="window.history.back()" class="btn btn-danger ajax-link">
                         Hủy
                    </button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
