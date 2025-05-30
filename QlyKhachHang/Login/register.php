<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow mx-auto" style="max-width: 900px;">
            <div class="card-body p-4">
                <h2 class="text-center mb-4 display-6"><strong>Đăng Ký Thông Tin</strong></h2>
                <form autocomplete="off">
                    <!-- Họ và Tên -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="firstname" class="form-label fs-5">Họ</label>
                            <input type="text" class="form-control form-control-lg" id="firstname" name="firstname" placeholder="Nhập họ của bạn">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label fs-5">Tên</label>
                            <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" placeholder="Nhập tên của bạn">
                        </div>
                    </div>

                    <!-- Mật khẩu -->
                    <div class="mb-4">
                        <label for="password" class="form-label fs-5">Mật khẩu</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Nhập email của bạn" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                    </div>

                    <!-- Ngày sinh, Giới tính, Thành phố -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label for="dob" class="form-label fs-5">Ngày sinh</label>
                            <input type="date" class="form-control form-control-lg" id="dob" name="dob">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fs-5 d-block">Giới tính</label>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input type="radio" id="male" name="gender" class="form-check-input" style="transform: scale(1.3);">
                                    <label for="male" class="form-check-label fs-5 ms-2">Nam</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="female" name="gender" class="form-check-input" style="transform: scale(1.3);">
                                    <label for="female" class="form-check-label fs-5 ms-2">Nữ</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="other" name="gender" class="form-check-input" style="transform: scale(1.3);">
                                    <label for="other" class="form-check-label fs-5 ms-2">Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label fs-5">Thành phố</label>
                            <select name="city" id="city" class="form-select form-select-lg">
                                <option value="">--Mời Chọn--</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Thanh Hóa">Thanh Hóa</option>
                            </select>
                        </div>
                    </div>

                    <!-- Sở thích -->
                    <div class="mb-4">
                        <label class="form-label fs-5 d-block">Sở thích</label>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-check">
                                <input type="checkbox" id="sach" class="form-check-input" style="transform: scale(1.3);">
                                <label for="sach" class="form-check-label fs-5 ms-2">Đọc sách</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="nhac" class="form-check-input" style="transform: scale(1.3);">
                                <label for="nhac" class="form-check-label fs-5 ms-2">Nghe nhạc</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="phim" class="form-check-input" style="transform: scale(1.3);">
                                <label for="phim" class="form-check-label fs-5 ms-2">Xem phim</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="bongda" class="form-check-input" style="transform: scale(1.3);">
                                <label for="bongda" class="form-check-label fs-5 ms-2">Bóng đá</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="bongchuyen" class="form-check-input" style="transform: scale(1.3);">
                                <label for="bongchuyen" class="form-check-label fs-5 ms-2">Bóng chuyền</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="caulong" class="form-check-input" style="transform: scale(1.3);">
                                <label for="caulong" class="form-check-label fs-5 ms-2">Cầu lông</label>
                            </div>
                        </div>
                    </div>

                    <!-- Mô tả bản thân -->
                    <div class="mb-4">
                        <label for="desc" class="form-label fs-5">Mô tả bản thân</label>
                        <textarea name="desc" id="desc" class="form-control form-control-lg" rows="4"></textarea>
                    </div>

                    <!-- Nút đăng ký và làm lại -->
                    <div class="d-flex gap-4 mb-4 justify-content-start">
                        <button type="submit" class="btn btn-primary btn-lg px-5 py-2">Đăng ký</button>
                        <button type="reset" class="btn btn-secondary btn-lg px-5 py-2">Làm lại</button>
                        <a href="../index.php" class="btn btn-outline-dark btn-lg px-4 py-2">
                            ← Quay lại trang chủ
                    </a>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="fs-5">Đã có tài khoản? <a href="login.php" class="text-primary fw-bold fs-5">Đăng nhập ngay</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
