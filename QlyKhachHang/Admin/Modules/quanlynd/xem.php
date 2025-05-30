<?php
    // Lấy ID khách hàng từ URL
    $id = $_GET['id'] ?? 0;

    // Lấy thông tin khách hàng từ database
    $sql = "SELECT * FROM khach_hang WHERE id = $id";

    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($query);
?>

<div class="container py-5">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Thông tin chi tiết khách hàng</h4>
        </div>
        <div class="card-body">
            <?php if ($row): ?>
            <table class="table table-bordered">
                <tr>
                    <th>Họ Và Tên</th>
                    <td><?php echo $row['ho'] . ' ' . $row['ten'] ?></td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <td><?= htmlspecialchars($row['so_dien_thoai']) ?></td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td><?= htmlspecialchars($row['dia_chi']) ?></td>
                </tr>
                <tr>
                    <th>Giới tính</th>
                    <td><?= htmlspecialchars($row['gioi_tinh']) ?></td>
                </tr>
                <tr>
                    <th>Ngày sinh</th>
                    <td><?= htmlspecialchars($row['ngay_sinh']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                </tr>
                <tr>
                    <th>Quốc tịch</th>
                    <td><?= htmlspecialchars($row['quoc_tich']) ?></td>
                </tr>
                <tr>
                    <th>Sở thích</th>
                    <td><?= htmlspecialchars($row['so_thich']) ?></td>
                </tr>
                <tr>
                    <th>Mô tả</th>
                    <td><?= htmlspecialchars($row['mo_ta']) ?></td>
                </tr>
                <tr>
                    <th>Số lần mua</th>
                    <td><?= htmlspecialchars($row['so_lan_mua']) ?></td>
                </tr>
                <tr>
                    <th>Tổng giá trị mua</th>
                    <td><?= htmlspecialchars($row['tong_gia_tri_mua']) ?></td>
                </tr>
                <tr>
                    <th>Lần cuối mua</th>
                    <td><?= htmlspecialchars($row['lan_cuoi_mua']) ?></td>
                </tr>
                <tr>
                    <th>Xếp Hạng</th>
                    <td>
                        <?php
                            echo htmlspecialchars($row['xep_hang']);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Trạng thái</th>
                    <td>
                        <?php
                                if ($row['trang_thai'] == 1) {
                                    echo '<span class="badge bg-success">Đã xác minh</span>';
                                } else {
                                    echo '<span class="badge bg-danger">Chưa xác minh</span>';
                                }
                            ?>
                    </td>
                </tr>
            </table>
            <button onclick="window.history.back()" class="btn btn-secondary mt-3">
                ← Quay lại
            </button>

            <?php else: ?>
            <div class="alert alert-danger">Không tìm thấy khách hàng.</div>
            <?php endif; ?>
        </div>
    </div>
</div>