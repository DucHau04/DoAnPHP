<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Điều Khiển - Trang Quản Trị</title>
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
        .stat-card {
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            color: white;
        }
        .stat-card i {
            font-size: 2rem;
            margin-bottom: 10px;
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
                    <a href="dashboard.php" class="active"><i class="fas fa-home"></i> Bảng Điều Khiển</a>
                    <a href="users.php"><i class="fas fa-users"></i> Người Dùng</a>
                    <a href="products.php"><i class="fas fa-box"></i> Sản Phẩm</a>
                    <a href="settings.php"><i class="fas fa-cog"></i> Cài Đặt</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <h2 class="mb-4">Bảng Điều Khiển</h2>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="stat-card bg-primary">
                            <i class="fas fa-users"></i>
                           
                            <p>Tổng Người Dùng</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card bg-success">
                            <i class="fas fa-box"></i>
                           
                            <p>Tổng Sản Phẩm</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card bg-warning">
                            <i class="fas fa-shopping-cart"></i>
                           
                            <p>Đơn Hàng Mới</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card bg-danger">
                            <i class="fas fa-dollar-sign"></i>
                            
                            <p>Doanh Thu</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Đơn Hàng Gần Đây</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã Đơn</th>
                                            <th>Khách Hàng</th>
                                            <th>Trạng Thái</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Người Dùng Mới</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Ngày Tham Gia</th>
                                        </tr>
                                    </thead>
                                </table>
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