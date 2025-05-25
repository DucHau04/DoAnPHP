<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm - Trang Quản Trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="text-white text-center mb-4">Trang Quản Trị</h3>
                <nav>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Bảng Điều Khiển</a>
                    <a href="users.php"><i class="fas fa-users"></i> Người Dùng</a>
                    <a href="products.php" class="active"><i class="fas fa-box"></i> Sản Phẩm</a>
                    <a href="settings.php"><i class="fas fa-cog"></i> Cài Đặt</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Quản Lý Sản Phẩm</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        <i class="fas fa-plus"></i> Thêm Sản Phẩm
                    </button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Hình Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Thương Hiệu</th>
                                    <th>Danh Mục</th>
                                    <th>Giá</th>
                                    <th>Tồn Kho</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../database/database.php';
                                $products = productAll();
                                if($products) {
                                    while($product = mysqli_fetch_array($products)) {
                                        echo "<tr>
                                            <td>{$product['MaSP']}</td>
                                            <td><img src='../database/image/sanpham/{$product['AnhNen']}' class='product-image' alt='{$product['TenSP']}'></td>
                                            <td>{$product['TenSP']}</td>
                                            <td>" . (isset($product['TenNCC']) ? $product['TenNCC'] : '-') . "</td>
                                            <td>" . (isset($product['TenDM']) ? $product['TenDM'] : '-') . "</td>
                                            <td>" . number_format($product['DonGia']) . "₫</td>
                                            <td>{$product['SoLuong']}</td>
                                            <td>
                                                <button class='btn btn-sm btn-primary edit-btn' data-id='{$product['MaSP']}' data-bs-toggle='modal' data-bs-target='#editProductModal'>
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <button class='btn btn-sm btn-danger delete-btn' data-id='{$product['MaSP']}' data-bs-toggle='modal' data-bs-target='#deleteProductModal'>
                                                    <i class='fas fa-trash'></i>
                                                </button>
                                            </td>
                                        </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm Sản Phẩm Mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Thương Hiệu</label>
                            <select class="form-select">
                                <option value="nike" selected>Nike</option>
                                <option value="adidas">Adidas</option>
                                <option value="puma">Puma</option>
                                <option value="new_balance">New Balance</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Danh Mục</label>
                            <select class="form-select">
                                <option value="sports_shoes" selected>Giày Thể Thao</option>
                                <option value="sandals">Dép Thể Thao</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="number" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số Lượng</label>
                            <input type="number" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" accept="image/*" multiple>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô Tả</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html> 