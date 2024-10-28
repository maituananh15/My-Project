@extends('user.home.product')
@section('content')
    @if (session('success'))
        <script>
            swal({
                title: "Thành công!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        </script>
    @endif
    <div class="minato">
        <h2 class="fade-in">Sản Phẩm Của Chúng Tôi</h2>
    </div>
    <div class="theme-switch-wrapper">
        <label for="checkbox" class="theme-switch">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>
    <section class="page-product" style="margin-top: 100px;">
        <div class="list-product d-flex" style="justify-content: space-between;">
            @foreach($products as $item)
                <div class="product-item w-22" style="margin-bottom: 10px">
                    <div class="product-top">
                        <div class="product-img">
                            <img class="w-100" src="{{ asset($item->images) }}" alt="not_image">
                        </div>
                        <div class="product-sale">Giảm giá!</div> <!-- Thêm nếu cần -->
                    </div>
                    <div class="product-mid w-100">
                        <button class="w-100"
                                data-toggle="tooltip"
                                data-placement="left"
                                title="Add to Cart"
                                onclick="window.location.href='{{ route('user.cart.add', ['product_id' => $item->id, 'quantity' => 1]) }}'">
                            THÊM VÀO GIỎ HÀNG
                        </button>
                    </div>
                    <div class="product-bot">
                        <h4 class="mb-3" style="margin-top: 10px;">{{ $item->name ?? '' }}</h4>
                        <h3 class="mb-3" style="color: blue;">256GB</h3>
                        <p class="mb-3">
                            <span style="color: red;">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <a href="#" class="scroll-to-top" id="scrollToTop">
        <i class='bx bx-chevron-up'></i>
    </a>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const checkbox = document.getElementById('checkbox');
            const body = document.body;
            checkbox.addEventListener('change', () => {
                if(checkbox.checked) {
                    body.classList.remove('light-mode');
                    body.classList.add('dark-mode');
                }
                else{
                    body.classList.remove('dark-mode');
                    body.classList.add('light-mode');
                }
            });
            body.classList.add('light-mode');
        });
    </script>
@endsection
