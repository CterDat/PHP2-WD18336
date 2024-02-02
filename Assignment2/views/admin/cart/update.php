<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Cập Nhật Sản Phẩm</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Cập Nhật Đơn Hàng</h2>
    <form action="index.php?url=update-cart&id_order=<?php echo $listCart['id_order'] ?>" method="POST" >
        <?php if($listCart) { ?>
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Trạng thái (	1. Đang chờ duyệt 2. Đã xác nhận 3. Đang vận chuyển 4. Hoàn thành	)</label>
                <input type="hidden" name="id_order" value="<?php if(isset($id_order)&&($id_order>0)) echo $id_order;?>">
                <input type="text" class="form-control" name="trangthai" value="<?php echo $listCart['trangthai'] ?>" placeholder="Nhập Trạng thái">
            </div>

            <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
              
        <?php } ?>
        

        
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
