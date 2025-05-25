<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu XSHOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="../assets/js/script.js" defer></script>


<div class="hero-section">
    <img src="../assets/images/banner.png" alt="Banner chính" class="hero-banner">
</div>

<div class="categories">
    <div class="category">
        <p>GIÀY NAM</p>
        <button>XEM MẪU</button>
    </div>
    <div class="category">
        <p>GIÀY NỮ</p>
        <button>XEM MẪU</button>
    </div>
    <div class="category">
        <p>GIÀY ĐÔI</p>
        <button>XEM MẪU</button>
    </div>
</div>

<h2 class="hot-title">HÀNG CAO CẤP <span>HOT NHẤT</span></h2>
<div class="product-list">
    <?php
    require_once '../database/database.php';
    $products = featuredProductsL4(); // Lấy 4 sản phẩm nổi bật
    if($products) {
        while($product = mysqli_fetch_array($products)) {
            $price_sale = price_sale($product['MaSP'], $product['DonGia']);
            $discount = 0;
            if($price_sale < $product['DonGia']) {
                $discount = round(($product['DonGia'] - $price_sale) / $product['DonGia'] * 100);
            }
            echo "<div class='product-card'>
                   <a href='../product.php?id={$product['MaSP']}'>
                      <div class='discount-tag'>{$discount}%</div>
                      <img src='../database/image/sanpham/{$product['AnhNen']}' alt='{$product['TenSP']}'>
                      <p class='product-name'>{$product['TenSP']}</p>
                      <p class='product-price'><del>" . number_format($product['DonGia']) . "₫</del> <strong>" . number_format($price_sale) . "₫</strong></p>
                    </a>
                  </div>";
        }
    }
    ?>
</div>
<div class="title-wrapper">
<h2 class="breadcrumb">
  <span>SẢN PHẨM</span>
  <span class="highlight-wrapper">
    <span id="highlight-text" class="highlight-slide">DEAL NGON </span>
  </span>
</h2>
</div>
<div class="product-list">
    <?php
    $products = productAll(); // Lấy tất cả sản phẩm
    if($products) {
        while($product = mysqli_fetch_array($products)) {
            $price_sale = price_sale($product['MaSP'], $product['DonGia']);
            $discount = 0;
            if($price_sale < $product['DonGia']) {
                $discount = round(($product['DonGia'] - $price_sale) / $product['DonGia'] * 100);
            }
            echo "<div class='product-card'>
                   <a href='../product.php?id={$product['MaSP']}'>
                      <div class='discount-tag'>{$discount}%</div>
                      <img src='../database/image/sanpham/{$product['AnhNen']}' alt='{$product['TenSP']}'>
                      <p class='product-name'>{$product['TenSP']}</p>
                      <p class='product-price'><del>" . number_format($product['DonGia']) . "₫</del> <strong>" . number_format($price_sale) . "₫</strong></p>
                    </a>
                  </div>";
        }
    }
    ?>
</div>

<div class="statistic-section">
    <div class="statistic-content">
        <p>
            Hơn 10 năm phát triển, XSHOP luôn mang đến những mẫu giày chất lượng tốt nhất với giá cả hợp lí nhất
            đến tay người tiêu dùng với hệ thống cửa hàng Số 1 Hà Nội và bán online khắp Việt Nam.
        </p>

        <h2 class="counter" data-target="1349841">0</h2>
        <p>Số Sản Phẩm Đã Bán</p>

        <h2 class="counter" data-target="567392">0</h2>
        <p>Khách Hàng Đã Mua</p>
    </div>

    <div class="statistic-video">
        <iframe width="560" height="350"
                src="https://www.youtube.com/embed/a1ILAowCiOw?autoplay=1&mute=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>

<script src="script.js"></script>
<?php include '../includes/footer.php'; ?>
</body>
</html>