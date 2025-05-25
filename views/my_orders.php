<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đơn hàng của tôi - XSHOP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<?php include '../includes/header.php'; ?>

<div class="orders-container">
    <h1 class="page-title">Đơn hàng của tôi</h1>
    
    <div class="orders-list">
        <!-- Mẫu đơn hàng -->
        <div class="order-card">
            <div class="order-header">
                <div class="order-info">
                    <span class="order-id">Mã đơn:</span>
                    <span class="order-date">Ngày đặt:</span>
                </div>
                <div class="order-status pending">
                    <i class="fas fa-clock"></i> Đang xử lý
                </div>
            </div>
            
            <div class="order-items">
                <div class="order-item">
                    <img src="../assets/images/h1.jpg" alt="Nike Air Force 1">
                    <div class="item-details">
                        <h3>Nike Air Force 1 Full Trắng</h3>
                        <p>Số lượng: 1</p>
                        <p class="item-price">550.000₫</p>
                    </div>
                </div>
            </div>
            
            <div class="order-footer">
                <div class="order-total">
                    <span>Tổng tiền:</span>
                    <strong>550.000₫</strong>
                </div>
                <div class="order-actions">
                    <button class="btn-details">Chi tiết</button>
                    <button class="btn-cancel">Hủy đơn</button>
                </div>
            </div>
        </div>

        <!-- Đơn hàng đã hoàn thành -->
        <div class="order-card">
            <div class="order-header">
                <div class="order-info">
                    <span class="order-id">Mã đơn:</span>
                    <span class="order-date">Ngày đặt:</span>
                </div>
                <div class="order-status completed">
                    <i class="fas fa-check-circle"></i> Đã hoàn thành
                </div>
            </div>
            
            <div class="order-items">
                <div class="order-item">
                    <img src="../assets/images/h2.jpg" alt="MLB Bigball">
                    <div class="item-details">
                        <h3>MLB Bigball Chunky NY Trắng Xanh Navy</h3>
                        <p>Số lượng: 1</p>
                        <p class="item-price">600.000₫</p>
                    </div>
                </div>
            </div>
            
            <div class="order-footer">
                <div class="order-total">
                    <span>Tổng tiền:</span>
                    <strong>600.000₫</strong>
                </div>
                <div class="order-actions">
                    <button class="btn-details">Chi tiết</button>
                    <button class="btn-review">Đánh giá</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.orders-container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
}

.page-title {
    text-align: center;
    margin-bottom: 2rem;
    color: #333;
}

.order-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 1.5rem;
    padding: 1.5rem;
}

.order-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}

.order-info {
    display: flex;
    gap: 2rem;
}

.order-status {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 500;
}

.order-status.pending {
    background: #fff3cd;
    color: #856404;
}

.order-status.completed {
    background: #d4edda;
    color: #155724;
}

.order-items {
    margin: 1rem 0;
}

.order-item {
    display: flex;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.order-item img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 4px;
}

.item-details h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1rem;
}

.item-price {
    color: #e44d26;
    font-weight: bold;
}

.order-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #eee;
}

.order-total {
    font-size: 1.1rem;
}

.order-total strong {
    color: #e44d26;
    margin-left: 0.5rem;
}

.order-actions {
    display: flex;
    gap: 1rem;
}

.btn-details, .btn-cancel, .btn-review {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-details {
    background: #007bff;
    color: white;
}

.btn-cancel {
    background: #dc3545;
    color: white;
}

.btn-review {
    background: #28a745;
    color: white;
}

.btn-details:hover, .btn-cancel:hover, .btn-review:hover {
    opacity: 0.9;
}
</style>

<?php include '../includes/footer.php'; ?>
</body>
</html> 