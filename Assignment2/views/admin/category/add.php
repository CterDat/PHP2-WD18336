<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Thêm Sản Phẩm</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Thêm Sản Phẩm</h2>
    <?php
    // Kiểm tra nếu có thông báo lỗi trong session
    if (isset($_SESSION['error_messages'])) {
        $error_messages = $_SESSION['error_messages'];

        // // Hiển thị thông báo lỗi cho người dùng
        // foreach ($error_messages as $field => $messages) {
        //     foreach ($messages as $message) {
        //         echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
        //     }
        // }
        // // Xóa thông báo lỗi từ session sau khi hiển thị
        // unset($_SESSION['error_messages']);
    }
    ?>
    <form action="index.php?url=add-category" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="name" name="category_name" placeholder="Nhập tên sản phẩm">
            <?php 
                echo(!empty($error_messages['name']['required']))?'<span style="color: red;">'.$error_messages['name']['required'].'</span>':false;
                echo(!empty($error_messages['name']['length']))?'<span style="color: red;">'.$error_messages['name']['length'].'</span>':false;
            ?>
            
            
        </div>

        <button type="submit" class="btn btn-primary" name="Save">Lưu</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
