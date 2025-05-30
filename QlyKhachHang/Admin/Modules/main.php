<div class="clear"></div>
<div class="main-content" id="main-content">
    <?php 
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }

        if($tam == 'quanlynd' && $query == 'them'){
            include("Modules/quanlynd/them.php");
        } elseif($tam == 'quanlynd' && $query == 'lietke'){
            include("Modules/quanlynd/lietke.php");
        } elseif($tam == 'quanlynd' && $query == 'xem'){
            include("Modules/quanlynd/xem.php");
        } elseif($tam == 'quanlynd' && $query == 'sua'){
            include("Modules/quanlynd/sua.php");
        } elseif($tam == 'quanlynd' && $query == 'timkiem'){
            include("Modules/quanlynd/timkiem.php");
        } else {
            include("Modules/dashboard.php");
        }
    ?>
</div>
<script>
    $(document).ready(function () {
    // Khi click vào liên kết có class ajax-link
    $(document).on('click', '.ajax-link', function (e) {
        e.preventDefault();

        const href = $(this).attr('href');

        // Load nội dung mới vào #main-content
        $('#main-content').load(href + ' #main-content > *', function () {
            // Sau khi load xong, gán lại sự kiện cho các nút Sắp xếp và Lọc
            $('#btnToggleSort').off('click').on('click', function () {
                var sortOptions = document.getElementById('sortOptions');
                sortOptions.style.display = (sortOptions.style.display === 'none' || sortOptions.style.display === '') ? 'flex' : 'none';
            });

            $('#btnToggleFilter').off('click').on('click', function () {
                var filterOptions = document.getElementById('filterOptions');
                filterOptions.style.display = (filterOptions.style.display === 'none' || filterOptions.style.display === '') ? 'flex' : 'none';
            });
        });

        // Cập nhật URL trên trình duyệt mà không reload trang
        history.pushState(null, '', href);
    });

    // Khi nhấn nút quay lại/trở lại trình duyệt
    window.onpopstate = function () {
        const href = location.href;
        $('#main-content').load(href + ' #main-content > *', function () {
            // Gán lại sự kiện cho các nút Sắp xếp và Lọc khi load lại trang
            $('#btnToggleSort').off('click').on('click', function () {
                var sortOptions = document.getElementById('sortOptions');
                sortOptions.style.display = (sortOptions.style.display === 'none' || sortOptions.style.display === '') ? 'flex' : 'none';
            });

            $('#btnToggleFilter').off('click').on('click', function () {
                var filterOptions = document.getElementById('filterOptions');
                filterOptions.style.display = (filterOptions.style.display === 'none' || filterOptions.style.display === '') ? 'flex' : 'none';
            });
        });
    };
});

</script>
