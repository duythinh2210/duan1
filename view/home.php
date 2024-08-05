<?php
    $html_dssp_new = showsp($dssp_new);
    $html_dssp_best = showsp($dssp_best);
    $html_dssp_view = showsp($dssp_view);
    $html_luotmua = showluotmua($dssp_luotmua);
?>

<style>
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
    }

    .slider-container {
        background: #1A1A1A;
        display: flex;
        height: 450px;
    }

    .text-container {
        flex: 0.8;
        margin-top: 200px;
        padding: 50px;
    }

    .text-container h2, h5, p {
        color: white;
    }

    .text-container h4 {
        color: black;
    }

    .image-slider {
        flex: 1.2;
        overflow: hidden;
        position: relative;
    }

    .image-slider img {
        width: 100%;
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }

    .image-slider img.active {
        display: block;
    }

    .text-container button {
        background-color: #523713;
        color: white;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }

    .text-container button:hover {
        background-color: black;
    }

    .fe-box {
        text-align: center;
        margin: 15px;
    }

    .fe-box img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .fe-box h6 {
        color: #333;
        font-weight: 600;
    }

    .section-p1 {
        padding: 50px 80px;
    }

    .section-m1 {
        text-align: center;
        background: #f7f7f7;
        padding: 50px 0;
    }

    .section-m1 h4 {
        color: #333;
        margin-bottom: 20px;
    }

    .section-m1 h2 {
        color: #523713;
        margin-bottom: 30px;
    }

    .section-m1 button {
        background-color: #523713;
        color: white;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }

    .section-m1 button:hover {
        background-color: black;
    }

    .pro-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
    }
</style>

<div class="slider-container">
    <div class="image-slider" id="imageSlider">
        <img src="layout/img/banner/banner-samsung-z-web.png" alt="Image 1" class="active">
        <img src="layout/img/banner/b30.png" alt="Image 2">
        <img src="layout/img/banner/b31.png" alt="Image 3">
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".image-slider img");
        let currentIndex = 0;

        function nextImage() {
            images[currentIndex].classList.remove("active");
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add("active");
        }

        setInterval(nextImage, 3000);
    });
</script>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="layout/img/features/f1.png" alt="">
        <h6>Miễn Phí Giao Hàng</h6>
    </div>
    <div class="fe-box">
        <img src="layout/img/features/f2.png" alt="">
        <h6>Đặt Hàng Online</h6>
    </div>
    <div class="fe-box">
        <img src="layout/img/features/f3.png" alt="">
        <h6>Tiết Kiệm Tiền</h6>
    </div>
    <div class="fe-box">
        <img src="layout/img/features/f4.png" alt="">
        <h6>Khuyến Mãi</h6>
    </div>
    <div class="fe-box">
        <img src="layout/img/features/f5.png" alt="">
        <h6>Thân Thiện</h6>
    </div>
    <div class="fe-box">
        <img src="layout/img/features/f6.png" alt="">
        <h6>Hỗ Trợ 24h</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>SẢN PHẨM BÁN CHẠY</h2>
    <div class="pro-container">
        <?=$html_luotmua;?>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>SẢN PHẨM MỚI</h2>
    <div class="pro-container">
        <?=$html_dssp_new;?>
    </div>
</section>

<section id="banner" class="section-m1">
    <h4>MUA SẢN PHẨM TẠI DT Mobile</h4>
    <h2>Giảm Giá <span>15%</span> Sản Phẩm Mới</h2>
    <a href="index.php?pg=shop"><button class="normal">XEM NGAY</button></a>
</section>

<section id="product1" class="section-p1">
    <h2>SẢN PHẨM HOT</h2>
    <div class="pro-container">
        <?=$html_dssp_best;?>
    </div>
</section>
