<!DOCTYPE html>
<html>

<head>
    <title>Update Product</title>
</head>

<body>
    <h1>Update Product</h1>
    <?php
    // Kiểm tra xem biến $product đã được truyền từ Controller hay chưa
    if (isset($product)) {
    ?>
        <form action="index.php?url=updatepr" method="POST">
        <input type="hidden" name="id" value="<?php echo isset($product['id']) ? $product['id'] : ''; ?>">
            <input type="text" name="ten_sp" value="<?php echo isset($product['ten_sp']) ? $product['ten_sp'] : ''; ?>">
            <input type="text" name="gia" value="<?php echo isset($product['gia']) ? $product['gia'] : ''; ?>">

            <input type="submit" value="Cập nhật sản phẩm" name="update">
        </form>
    <?php
    } else {
        echo "Không tìm thấy thông tin sản phẩm.";
    }
    ?>
</body>

</html>