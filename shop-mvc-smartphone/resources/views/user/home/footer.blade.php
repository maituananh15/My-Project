<footer>
    <div class="luffy">
        <div class="boa">
                <pre>
                        <b>Tổng đài hỗ trợ</b>
                        Gọi mua: <a href="#">1900 232 460</a>  (8:30 - 21:30)
                    </pre>
        </div>
        <div class="zoro">
                <pre>
                        <b>Về công ty</b>
                        <a href="/">Giới thiệu công ty</a>
                        <a href="">Gủi góp ý, khiếu nại</a>
                    </pre>
        </div>
        <div class="sanji">
                <pre>
                        <b class="bb">Website cùng tập đoàn</b>
                        <span><i class='bx bxl-facebook-circle'></i> 3886k fan </span>
                        <span><i class='bx bxl-youtube'></i> 800k Đăng ký</span>
                        <span><i class='bx bxl-instagram'></i> 500k Theo dõi</span>
                </pre>
        </div>
    </div>
</footer>
<script>
    window.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('.sec-2, .sec-3, .sec-4, footer'); // Thêm sec-3 vào đây
        const bannerImages = document.querySelectorAll('.sec-4 .contact img, .sec-2 .con-ig img');

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                section.classList.add('show');
            }
        });

        bannerImages.forEach(img => {
            const rect = img.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                img.classList.add('show');
            }
        });
    });
</script>
<script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        if (window.scrollY > 50) { // Thay đổi 50 thành giá trị mà bạn muốn
            header.classList.add('shrink'); // Thêm lớp khi cuộn xuống
        } else {
            header.classList.remove('shrink'); // Xóa lớp khi quay lại đầu trang
        }
    });
</script>
<script>
    const scrollToTopButton = document.getElementById('scrollToTop');

    // Hiện nút khi cuộn xuống
    window.addEventListener('scroll', () => {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });

    // Xử lý sự kiện click
    scrollToTopButton.addEventListener('click', (e) => {
        e.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Cuộn mượt
        });
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy tất cả các sản phẩm
        const products = document.querySelectorAll('.page-product .product-item');

        products.forEach((product, index) => {
            // Tính toán delay dựa trên chỉ số
            const delay = 0.3 + index * 0.1; // Bắt đầu từ 0.3s và tăng 0.1s cho mỗi sản phẩm
            product.style.animationDelay = `${delay}s`;
        });
    });
</script>

<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/sidebarmenu.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="/assets/js/dashboard.js"></script>
<script>
    function handleAddToCart(productId) {
        @if(Auth::check())
            window.location.href = '{{ route('user.cart.add', ['product_id' => '']) }}' + productId + '&quantity=1';
        @else
        if (confirm("Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng. Bạn có muốn tiếp tục không?")) {
            window.location.href = '{{ route('login.index') }}';
        }
        @endif
    }
</script>
<script>
    window.onload = function() {
        document.querySelector('.minato').classList.add('fade-in');
    };
</script>
{{--<script>--}}
{{--    document.addEventListener("DOMContentLoaded", function() {--}}
{{--        // Thêm lớp 'show' vào footer sau khi trang tải xong--}}
{{--        const footer = document.querySelector('footer');--}}
{{--        footer.classList.add('show');--}}
{{--    });--}}
{{--</script>--}}
</body>

