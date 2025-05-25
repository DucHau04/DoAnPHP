<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài Đặt - Trang Quản Trị</title>
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
                    <a href="products.php"><i class="fas fa-box"></i> Sản Phẩm</a>
                    <a href="settings.php" class="active"><i class="fas fa-cog"></i> Cài Đặt</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <h2 class="mb-4">Cài Đặt</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <!-- Cài Đặt Chung -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Cài Đặt Chung</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Tên Website</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mô Tả Website</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                                </form>
                            </div>
                        </div>

                        <!-- Cài Đặt Tài Khoản -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Cài Đặt Tài Khoản</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mật Khẩu Mới</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Xác Nhận Mật Khẩu</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cập Nhật Tài Khoản</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 