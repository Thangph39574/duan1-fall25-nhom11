<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tour Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f6fa; }
        .sidebar { width: 250px; height: 100vh; background: #343a40; color: #fff; position: fixed; }
        .sidebar a { color: #fff; padding: 12px; display: block; text-decoration: none; }
        .sidebar a:hover { background: #495057; }
        .content { margin-left: 250px; padding: 20px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="p-3">Admin Panel</h4>
        <a href="dashboard.php">Dashboard</a>
        <a href="tours.php">Quản lý Tour</a>
        <a href="booking.php">Quản lý Đặt Tour</a>
        <a href="users.php">Quản lý Người dùng</a>
        <a href="logout.php">Đăng xuất</a>
    </div>

    <div class="content">
        <h2>Quản lý Tour</h2>
        <a href="add-tour.php" class="btn btn-primary mb-3">+ Thêm Tour</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Tour</th>
                    <th>Giá</th>
                    <th>Ngày khởi hành</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // DEMO DATA
                    $tours = [
                        ["id" => 1, "name" => "Tour Đà Nẵng", "price" => 2500000, "date" => "2025-12-10"],
                        ["id" => 2, "name" => "Tour Sapa", "price" => 1800000, "date" => "2025-11-22"],
                    ];

                    foreach($tours as $tour) {
                        echo "<tr>
                                <td>{$tour['id']}</td>
                                <td>{$tour['name']}</td>
                                <td>".number_format($tour['price'])." VND</td>
                                <td>{$tour['date']}</td>
                                <td>
                                    <a href='edit-tour.php?id={$tour['id']}' class='btn btn-warning btn-sm'>Sửa</a>
                                    <a href='delete-tour.php?id={$tour['id']}' class='btn btn-danger btn-sm'>Xóa</a>
                                </td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
