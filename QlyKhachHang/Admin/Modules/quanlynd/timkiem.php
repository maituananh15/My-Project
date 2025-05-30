<?php 
if(isset($_POST['timkiem'])){
    $tukhoa = mysqli_real_escape_string($mysqli, $_POST['tukhoa']);
} else {
    $tukhoa = '';
}
$sql = "SELECT * FROM khach_hang WHERE 
        ho LIKE '%$tukhoa%' 
        OR ten LIKE '%$tukhoa%'
        OR email LIKE '%$tukhoa%' 
        OR so_dien_thoai LIKE '%$tukhoa%' 
        OR dia_chi LIKE '%$tukhoa%'";
$result = mysqli_query($mysqli, $sql);

if(mysqli_num_rows($result) > 0){
?>
<div class="body-wrapper my-5">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row align-items-center mb-3">
                    <div class="col-md-6">
                        <h5 class="fw-bold">Khách Hàng / <strong>Tìm Kiếm</strong></h5>
                    </div>
                </div>
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
                                $i = 0;
                                while($row = mysqli_fetch_array($result)){
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
                                    <a href="?action=quanlynd&query=xem&id=<?php echo $row['id'] ?>" class="btn btn-success mx-2">
                                        <i class='bx bxs-user-circle'></i>
                                    </a>
                                    <a href="?action=quanlynd&query=sua&id=<?php echo $row['id'] ?>" class="btn btn-primary mx-2">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a href="Modules/quanlynd/xuly.php?id=<?php echo $row['id'] ?>" 
                                       onclick="return confirm('Bạn muốn xóa không? Mã: <?php echo $row['id']; ?>');" 
                                       class="btn btn-danger mx-2">
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
                <div class="fixed-bottom p-4 d-flex justify-content-end">
                    <button onclick="history.back()" 
                            class="btn btn-warning btn-lg rounded-circle shadow-lg ajax-link" 
                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class='bx bx-arrow-back' style="font-size: 28px;"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
    } else {
        echo '<div class="alert alert-danger text-center" role="alert">Không tìm thấy kết quả nào!</div>';
    }
?>