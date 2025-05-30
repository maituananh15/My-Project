<?php 
    if(isset($_GET['trang'])){
        $get_trang = $_GET['trang'];
    } else {
        $get_trang = 1;
    }
    if($get_trang == '' || $get_trang == 1){
        $trang = 0;
    } else {
        $trang = ($get_trang * 10) - 10;
    }

    // Kiểm tra nếu có sắp xếp và lọc
    $sort = isset($_GET['sort']) ? $_GET['sort'] : 'ten';
    $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

    $filter = isset($_GET['filter']) ? $_GET['filter'] : '';
    $filter_ngay_sinh = isset($_GET['ngay_sinh']) ? $_GET['ngay_sinh'] : '';
    $filter_xep_hang = isset($_GET['xep_hang']) ? $_GET['xep_hang'] : '';
    $filter_dia_chi = isset($_GET['dia_chi']) ? $_GET['dia_chi'] : '';

    $sql_lietke = "SELECT * FROM khach_hang WHERE 1";

    // Lọc theo năm sinh
    if (!empty($filter_ngay_sinh)) {
        $sql_lietke .= " AND YEAR(ngay_sinh) = '$filter_ngay_sinh'";
    }

    // Lọc theo hạng
    if (!empty($filter_xep_hang)) {
        $sql_lietke .= " AND xep_hang = '$filter_xep_hang'";
    }

    // Lọc theo địa chỉ
    if (!empty($filter_dia_chi)) {
        $sql_lietke .= " AND dia_chi LIKE '%$filter_dia_chi%'";
    }

    // Sắp xếp và phân trang
    $sql_lietke .= " ORDER BY $sort $order LIMIT $trang,10";
    $query_lietke = mysqli_query($mysqli, $sql_lietke);
    $query_string = "&sort=$sort&order=$order&ngay_sinh=$filter_ngay_sinh&xep_hang=$filter_xep_hang&dia_chi=$filter_dia_chi";
?>

<div class="body-wrapper my-5">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-6">
                        <h5 class="fw-bold">Khách Hàng / <strong>Danh sách</strong></h5>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="Modules/quanlynd/xuat_excel.php" class="btn btn-success">
                            <i class='bx bxs-file-export'></i> Xuất Excel
                        </a>
                    </div>
                </div>
                <!-- Sắp xêp vs Lọc -->
                <form method="GET" action="index.php" class="mb-4">
                    <input type="hidden" name="action" value="quanlynd">
                    <input type="hidden" name="query" value="lietke">

                    <div class="row mb-3">
                        <div class="col text-start">
                            <button type="button" id="btnToggleSort" class="btn btn-outline-secondary">
                                <i class="bx bx-sort"></i> Sắp xếp
                            </button>
                            <button type="button" id="btnToggleFilter" class="btn btn-outline-secondary">
                                <i class="bx bx-filter"></i> Lọc
                            </button>
                        </div>
                    </div>

                    <!-- Sắp xếp -->
                    <div id="sortOptions" class="row g-2 mb-3" style="display: none;">
                        <div class="col-md-3">
                            <select name="sort" class="form-control">
                                <option value="ten" <?php echo ($sort == 'ten') ? 'selected' : ''; ?>>Tên</option>
                                <option value="ho" <?php echo ($sort == 'ho') ? 'selected' : ''; ?>>Họ</option>
                                <option value="so_lan_mua" <?php echo ($sort == 'so_lan_mua') ? 'selected' : ''; ?>>Số Lần Mua</option>
                                <option value="tong_gia_tri_mua" <?php echo ($sort == 'tong_gia_tri_mua') ? 'selected' : ''; ?>>Tổng Giá Trị Mua</option>
                                <option value="xep_hang" <?php echo ($sort == 'xep_hang') ? 'selected' : ''; ?>>Xếp Hạng</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="order" class="form-control">
                                <option value="ASC" <?php echo ($order == 'ASC') ? 'selected' : ''; ?>>Tăng Dần</option>
                                <option value="DESC" <?php echo ($order == 'DESC') ? 'selected' : ''; ?>>Giảm Dần</option>
                            </select>
                        </div>
                    </div>

                    <!-- Lọc -->
                    <div id="filterOptions" class="row g-2" style="display: none;">
                        <div class="col-md-3">
                            <input type="number" name="ngay_sinh" class="form-control" placeholder="Năm sinh" value="<?php echo $filter_ngay_sinh; ?>">
                        </div>
                        <div class="col-md-3">
                            <select name="xep_hang" class="form-control">
                                <option value="">-- Hạng --</option>
                                <option value="Vip" <?php echo ($filter_xep_hang == 'Vip') ? 'selected' : ''; ?>>Vip</option>
                                <option value="Thân Thiết" <?php echo ($filter_xep_hang == 'Thân Thiết') ? 'selected' : ''; ?>>Thân Thiết</option>
                                <option value="Bạc" <?php echo ($filter_xep_hang == 'Bạc') ? 'selected' : ''; ?>>Bạc</option>
                                <option value="Vàng" <?php echo ($filter_xep_hang == 'Vàng') ? 'selected' : ''; ?>>Vàng</option>
                                <option value="Kim Cương" <?php echo ($filter_xep_hang == 'Kim Cương') ? 'selected' : ''; ?>>Kim Cương</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ (thành phố)" value="<?php echo $filter_dia_chi; ?>">
                        </div>
                    </div>

                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Áp Dụng</button>
                    </div>
                </form>

                <!-- Bảng dữ liệu khách hàng -->
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-bordered table-hover text-center" style="min-width: 1200px;">
                        <thead class="table-dark">
                            <tr>
                                <th>STT</th>
                                <th>Họ và Tên</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa chỉ</th>
                                <th>Số Lần Mua</th>
                                <th>Tổng Giá Trị Mua</th>
                                <th>Xếp Hạng</th>   
                                <th>Quản Lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = $trang;
                                while($row = mysqli_fetch_array($query_lietke)){
                                    $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['ho'] . ' ' . $row['ten'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['so_dien_thoai'] ?></td>
                                <td><?php echo $row['dia_chi'] ?></td>
                                <td><?php echo $row['so_lan_mua'] ?></td>
                                <td><?php echo number_format($row['tong_gia_tri_mua'], 0, ',', '.') . ' VNĐ' ?></td>
                                <td><?php echo $row['xep_hang'] ?></td>
                                <td>
                                    <a href="?action=quanlynd&query=xem&id=<?php echo $row['id'] ?>" class="btn btn-success mx-2 ajax-link">
                                        <i class='bx bxs-user-circle'></i>
                                    </a>
                                    <a href="?action=quanlynd&query=sua&id=<?php echo $row['id'] ?>" class="btn btn-primary mx-2 ajax-link">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a href="Modules/quanlynd/xuly.php?id=<?php echo $row['id'] ?>" 
                                       onclick="return confirm('Bạn muốn xóa không? Mã: <?php echo $row['id']; ?>');" 
                                       class="btn btn-danger mx-2 ajax-link">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<!-- Phân trang -->

    <div class="container-fluid my-5">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center bg-light py-3 shadow mt-5">               
                <li class="page-item disabled">
                    <span class="page-link">Trang:</span>
                </li>
                <?php
                    $sql_trang = mysqli_query($mysqli, "SELECT * FROM khach_hang");
                    $row_count = mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count / 10);

                    for($i = 1; $i <= $trang; $i++){
                        $active = ($get_trang == $i) ? 'active' : '';
                ?>
                <li class="page-item <?php echo $active; ?>">
                    <a class="page-link ajax-link"
                        href="index.php?action=quanlynd&query=lietke&trang=<?php echo $i . $query_string; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </div>



<script>
    document.getElementById('btnToggleSort').addEventListener('click', function () {
        var sortOptions = document.getElementById('sortOptions');
        sortOptions.style.display = (sortOptions.style.display === 'none' || sortOptions.style.display === '') ? 'flex' : 'none';
    });

    document.getElementById('btnToggleFilter').addEventListener('click', function () {
        var filterOptions = document.getElementById('filterOptions');
        filterOptions.style.display = (filterOptions.style.display === 'none' || filterOptions.style.display === '') ? 'flex' : 'none';
    });
</script>
<style>
    #sortOptions, #filterOptions {
        transition: all 0.3s ease;
    }
</style>