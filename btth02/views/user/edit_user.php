<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style_login.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=index">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?controller=admin&action=index#">Tổng quan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php?controller=user&action=index">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=category&action=index">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=author&action=index">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=article&action=index">Bài viết</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 mb-5">
        <h3 class="text-center text-uppercase fw-bold">Sửa người dùng</h3>
        <form action="index.php?controller=user&action=update&id=<?php echo htmlspecialchars($user['ma_user']); ?>" method="post">
            <div class="input-group mt-3 mb-3">
                <span class="input-group-text">Mã user</span>
                <input type="text" class="form-control" name="id" readonly value="<?php echo htmlspecialchars($user['ma_user']); ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text">Tên user</span>
                <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text">Mật khẩu</span>
                <input type="password" class="form-control" name="password" value="<?php echo htmlspecialchars($user['password']); ?>">
            </div>

            <!-- Sử dụng text-end và mb-5 để căn chỉnh và thêm khoảng trống -->
            <div class="form-group text-end mb-5">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href="user.php" class="btn btn-warning">Quay lại</a>
            </div>
        </form>
    </main>

    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary border-2" style="height:80px">
        <h4 class="text-center">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
