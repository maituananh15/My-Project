<?php
session_start();
include 'database.php';

if (isset($_POST['dang_ky'])) {
  
  // Lấy dữ liệu từ form
  $ho = $_POST['ho'] ?? '';
  $ten = $_POST['ten'] ?? '';
  $matkhau = $_POST['mat_khau'] ?? '';
  $email = $_POST['email'] ?? '';
  $ngaysinh = $_POST['ngay_sinh'] ?? '';
  $gioitinh = $_POST['gioi_tinh'] ?? '';
  $thanhpho = $_POST['thanh_pho'] ?? '';
  $sothich = isset($_POST['so_thich']) ? implode(", ", $_POST['so_thich']) : '';
  $mota = $_POST['mo_ta'] ?? '';

  // Kiểm tra xem có trường nào bị bỏ trống không
  if (empty($ho) || empty($ten) || empty($matkhau) || empty($email) || empty($ngaysinh) || empty($gioitinh) || empty($thanhpho)) {
    echo  "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.location.href = 'Register.php';</script>";
    exit();
  }

  // Lưu lại thông tin form vào session
  $_SESSION['form_data'] = $_POST;

  // Câu lệnh SQL thêm dữ liệu
  $sql = "INSERT INTO Users (ho, ten, mat_khau, email, ngay_sinh, gioi_tinh, thanh_pho, so_thich, mo_ta) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssssss", $ho, $ten, $matkhau, $email, $ngaysinh, $gioitinh, $thanhpho, $sothich, $mota);

  if ($stmt->execute()) {
    echo "<script>alert('Đăng ký thành công!'); window.location.href = 'Register.php';</script>";
    exit();
  } else {
    echo "Lỗi: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
} else {
  // Nếu truy cập handle.php không đúng cách thì chuyển về form
  header("Location: Register.php");
  exit();
}
?>

