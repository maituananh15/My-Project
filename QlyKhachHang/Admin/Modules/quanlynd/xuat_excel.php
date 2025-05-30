<?php

// Kết nối database
include_once('../../config/config.php');

// Thiết lập header cho file Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=danh_sach_khach_hang_" . date('d-m-Y') . ".xls");
header("Pragma: no-cache");
header("Expires: 0");

// Truy vấn dữ liệu (lấy tất cả không phân trang)
$sql = "SELECT * FROM khach_hang ORDER BY ten ASC";
$query = mysqli_query($mysqli, $sql);

// Bắt đầu xuất dữ liệu
echo "<meta charset='UTF-8'>";
echo "<style>
        body {
            font-family: Times New Roman, sans-serif;
            font-size: 12px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
        }
        td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>";

echo "<table>";
echo "<tr>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Giới Tính</th>
        <th>Ngày Sinh</th>
        <th>Quốc Tịch</th>
        <th>Số Lần Mua</th>
        <th>Tổng Giá Trị Mua</th>
        <th>Lần Cuối Mua</th>
        <th>Xếp Hạng</th>
        <th>Trạng Thái</th>
    </tr>";


$i = 0;
while($row = mysqli_fetch_array($query)) {
    $i++;
    $trang_thai = ($row['trang_thai'] == 1) ? 'Đã Xác Minh' : 'Chưa xác Minh';
    
    echo "<tr>
            <td>".$i."</td>
            <td>".$row['ho'] . ' ' . $row['ten']."</td>
            <td>".$row['email']."</td>
            <td>".$row['so_dien_thoai']."</td>
            <td>".$row['dia_chi']."</td>
            <td>".$row['gioi_tinh']."</td>
            <td>".$row['ngay_sinh']."</td>
            <td>".$row['quoc_tich']."</td>
            <td>".$row['so_thich']."</td>
            <td>".$row['mo_ta']."</td>
            <td>".$row['so_lan_mua']."</td>
            <td>".$row['tong_gia_tri_mua']."</td>
            <td>".$row['lan_cuoi_mua']."</td>
            <td>".$row['xep_hang']."</td>
            <td>".$trang_thai."</td>
        </tr>";
}

echo "</table>";
exit();
?>