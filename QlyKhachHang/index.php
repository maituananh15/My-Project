<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopOnline - Trang bán hàng trực tuyến</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-shopping-cart me-2"></i>ShopOnline
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên hệ</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-light me-2"   href="Login/login.php">
                        <i class="fas fa-sign-in-alt me-1"></i> Đăng nhập
                    </a>
                    <a class="btn btn-light" href="Login/register.php">
                        <i class="fas fa-user-plus me-1"></i> Đăng ký
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Banner-->
    <section id="home" class="bg-light py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Mua sắm trực tuyến dễ dàng</h1>
                    <p class="lead mb-4">Hàng ngàn sản phẩm chất lượng với giá cả hợp lý. Giao hàng nhanh chóng trong
                        24h.</p>
                    <a href="#products" class="btn btn-primary btn-lg px-4 me-2">Mua ngay</a>
                    <a href="#about" class="btn btn-outline-primary btn-lg px-4">Tìm hiểu thêm</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://media.kenhtuyensinh.vn/images/2014/12/Cach-thu--phuong-tien-de-ban-hang-truc-tuyen-thanh-cong.jpg"
                        alt="Hero Image" class="img-fluid rounded shadow-lg animate__animated animate__fadeIn">
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section id="products" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Sản phẩm nổi bật</h2>
                <p class="text-muted">Các sản phẩm được yêu thích nhất hiện nay</p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInUp">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Giảm 15%</span>
                        <div class="product-img-container" style="height: 200px; overflow: hidden;">
                            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Apple/iPhone-16/cate-iphone-16-series-30.jpg"
                                class="card-img-top w-100 h-100 object-fit-cover" alt="Product 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Điện thoại Smartphone X1</h5>
                            <p class="card-text text-muted">Màn hình 6.5 inch, RAM 8GB, bộ nhớ 128GB, camera 48MP</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-danger fw-bold">8.990.000₫</span>
                                    <span class="text-decoration-line-through text-muted ms-2">10.500.000₫</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="product-img-container" style="height: 200px; overflow: hidden;">
                            <img src="https://laptopdell.com.vn/wp-content/uploads/2022/07/laptop_lenovo_legion_s7_8.jpg"
                                class="card-img-top w-100 h-100 object-fit-cover" alt="Product 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Laptop Ultrabook Pro</h5>
                            <p class="card-text text-muted">Core i7, RAM 16GB, SSD 512GB, màn hình 14 inch Full HD</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-danger fw-bold">22.990.000₫</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Mới</span>
                        <div class="product-img-container" style="height: 200px; overflow: hidden;">
                            <img src="https://phukiencasu.com/wp-content/uploads/2022/08/tai-nghe-bluetooth-tai-tho-de-thuong.jpg"
                                class="card-img-top w-100 h-100 object-fit-cover" alt="Product 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tai nghe không dây TWS</h5>
                            <p class="card-text text-muted">Bluetooth 5.0, thời lượng pin 20h, chống ồn chủ động</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-danger fw-bold">1.290.000₫</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-outline-primary px-4">Xem thêm sản phẩm</button>
            </div>
        </div>
    </section>

    <!-- Discount -->
    <section class="bg-danger text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="fw-bold mb-3">Khuyến mãi đặc biệt cuối năm</h3>
                    <p class="mb-0">Giảm giá lên đến 50% cho tất cả sản phẩm. Áp dụng đến hết ngày 31/12/2023.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <button class="btn btn-light btn-lg px-4">Mua ngay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Khách hàng nói gì về chúng tôi</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="https://img.freepik.com/premium-vector/company-clients-icon-icon_1076610-42339.jpg"
                                    class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="Customer 1">
                            </div>
                            <h5 class="card-title">Nguyễn Văn A</h5>
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"Sản phẩm chất lượng, giao hàng nhanh chóng. Tôi rất hài lòng với dịch
                                vụ của ShopOnline."</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="https://img.freepik.com/premium-vector/company-clients-icon-icon_1076610-42339.jpg"
                                    class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="Customer 2">
                            </div>
                            <h5 class="card-title">Trần Thị B</h5>
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="card-text">"Giá cả hợp lý, nhân viên tư vấn nhiệt tình. Sẽ tiếp tục ủng hộ shop
                                trong thời gian tới."</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="d-flex justify-content-center mb-3">
                                <img src="https://img.freepik.com/premium-vector/company-clients-icon-icon_1076610-42339.jpg"
                                    class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="Customer 3">
                            </div>
                            <h5 class="card-title">Lê Văn C</h5>
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="card-text">"Đã mua nhiều sản phẩm tại đây, chất lượng luôn đảm bảo. Chỉ mong có
                                nhiều chương trình khuyến mãi hơn."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-about-us-chalk-white-icon-on-black-background-png-image_8058231.png"
                        alt="About Us" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Về chúng tôi</h2>
                    <p>ShopOnline là một trong những cửa hàng thương mại điện tử hàng đầu tại Việt Nam, chuyên cung cấp
                        các sản phẩm công nghệ, điện tử chất lượng cao với giá cả cạnh tranh.</p>
                    <p>Với phương châm "Khách hàng là trung tâm", chúng tôi luôn nỗ lực mang đến những trải nghiệm mua
                        sắm tốt nhất cho quý khách hàng.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Sản phẩm chính hãng 100%</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Giao hàng toàn quốc</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Đổi trả trong 7 ngày</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Hỗ trợ 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact  -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Liên hệ với chúng tôi</h2>
                <p class="text-muted">Mọi thắc mắc xin vui lòng liên hệ qua form bên dưới</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Nội dung</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4">Gửi liên hệ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-bold mb-3">ShopOnline</h5>
                    <p>Địa chỉ: 123 Đường ABC, Quận 1, Hà Nội</p>
                    <p>Điện thoại: 0123 456 789</p>
                    <p>Email: info@shoponline.vn</p>
                </div>
                <div class="col-md-2 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="fw-bold mb-3">Liên kết</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white text-decoration-none">Trang chủ</a></li>
                        <li class="mb-2"><a href="#products" class="text-white text-decoration-none">Sản phẩm</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Giới thiệu</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white text-decoration-none">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="fw-bold mb-3">Hỗ trợ</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Chính sách bảo mật</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Điều khoản sử dụng</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Chính sách đổi trả</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Hướng dẫn mua hàng</a></li>
                    </ul>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold mb-3">Bản đồ</h5>
                    <div class="ratio ratio-16x9 mb-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.715101815028!2d105.7955043!3d21.1575179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313501b243773e45%3A0xc5c8ff561dc8814d!2zS2h1IGR1IGzhu4tjIHNpbmggdGjDoWkgQ+G7rW4gWGFuaA!5e0!3m2!1svi!2s!4v1715750000000!5m2!1svi!2s" 
                                width="100%" 
                                height="200" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-4 social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4 social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4 social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-white fs-4 social-icon"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">© 2025 ShopOnline. Bảo lưu mọi quyền.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate.css for simple animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</body>

</html>