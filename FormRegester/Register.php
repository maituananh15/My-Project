<?php
session_start();

$ho = $ten = $matkhau = $email = $ngaysinh = $gioitinh = $thanhpho = $mota = "";
$sothichArr = [];

if (isset($_GET['show']) && isset($_SESSION['form_data'])) {
  $formData = $_SESSION['form_data'];
  $ho = $formData['ho'] ?? "";
  $ten = $formData['ten'] ?? "";
  $matkhau = $formData['mat_khau'] ?? "";
  $email = $formData['email'] ?? "";
  $ngaysinh = $formData['ngay_sinh'] ?? "";
  $gioitinh = $formData['gioi_tinh'] ?? "";
  $thanhpho = $formData['thanh_pho'] ?? "";
  $sothichArr = $formData['so_thich'] ?? [];
  $mota = $formData['mo_ta'] ?? "";
}
if (isset($_GET['reset_session'])) {
  unset($_SESSION['form_data']);
  header("Location: Register.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php 
      include 'database.php'; 
    ?>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Đăng ký thông tin</h2>

      <form method="POST" action="handle.php" autocomplete="off">

        <!-- Họ và Tên -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="ho" class="form-label">Họ</label>
            <input type="text" class="form-control" id="ho" name="ho" value="<?= htmlspecialchars($ho) ?>">
          </div>
          <div class="col-md-6">
            <label for="ten" class="form-label">Tên</label>
            <input type="text" class="form-control" id="ten" name="ten" value="<?= htmlspecialchars($ten) ?>">
          </div>
        </div>

        <!-- Mật Khẩu -->
        <div class="mb-3">
          <label for="mat_khau" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="<?= htmlspecialchars($matkhau) ?>" readonly onfocus="this.removeAttribute('readonly');">
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" readonly onfocus="this.removeAttribute('readonly');">
        </div>

        <!-- Ngày sinh, Giới tính, Thành phố -->
        <div class="row mb-3">
          <div class="col-md-4">
            <label for="ngay_sinh" class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="<?= $ngaysinh ?>">
          </div>

          <div class="col-md-4 mt-1">
            <label class="form-label d-block" style="margin-left: 44px">Giới tính</label>
            <?php
            $genders = ['Nam', 'Nữ', 'Khác'];
            foreach ($genders as $gender) {
              $checked = ($gioitinh == $gender) ? "checked" : "";
              echo "<div class='form-check form-check-inline'>
                      <input type='radio' name='gioi_tinh' value='$gender' class='form-check-input' style='margin-left:20px;' id='gt_$gender' $checked>
                      <label for='gt_$gender' class='form-check-label' style='margin-left:10px;'>$gender</label>
                    </div>";
            }
            ?>
          </div>

          <div class="col-md-4">
            <label for="thanh_pho" class="form-label">Thành phố</label>
            <select name="thanh_pho" id="thanh_pho" class="form-select">
              <?php
              $cities = ["", "Hà Nội", "Hồ Chí Minh", "Đà Nẵng", "Hải Phòng", "Cần Thơ", "Thanh Hóa", "Nghệ An", "Thừa Thiên Huế", "Quảng Ninh"];
              foreach ($cities as $city) {
                $selected = ($thanhpho == $city) ? "selected" : "";
                echo "<option value='$city' $selected>" . ($city ?: "--Mời chọn--") . "</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <!-- Sở thích -->
        <div class="mb-3">
          <label class="form-label d-block">Sở thích</label>
          <?php
          $soThichList = ["Đọc sách", "Nghe nhạc", "Xem phim", "Bóng đá", "Bóng chuyền", "Cầu lông"];
          foreach ($soThichList as $st) {
            $checked = (in_array($st, $sothichArr)) ? "checked" : "";
            echo "<div class='form-check form-check-inline'>
                    <input type='checkbox' id='$st' name='so_thich[]' value='$st' class='form-check-input' $checked>
                    <label for='$st' class='form-check-label'>$st</label>
                  </div>";
          }
          ?>
        </div>
        
        <!-- Mô tả bản thân -->
        <div class="mb-3">
          <label for="mo_ta" class="form-label">Mô tả bản thân</label>
          <textarea name="mo_ta" id="mo_ta" class="form-control" rows="3"><?= htmlspecialchars($mota) ?></textarea>
        </div>
        
        <!-- Nút đăng ký, làm lại, hiển thị và xóa thông tin -->
        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-primary" name="dang_ky">Đăng ký</button>
          <button type="reset" class="btn btn-secondary">Làm lại</button>
          <a href="Register.php?show=1" class="btn btn-warning">Hiển thị</a>
          <a href="Register.php?reset_session=1" class="btn btn-danger">Xóa thông tin</a>
        </div>
      </form>
    </div>
  </body>
</html>
