<?php
if(is_array($pr)){
    extract($pr);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Product</title>
</head>

<body>
    <h1>Update Product</h1>
    <?php
    // Kiểm tra xem biến $product đã được truyền từ Controller hay chưa
    
    ?>
        <form action="index.php?url=updatecf" method="POST">
        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
            <input type="text" name="ten_sp" value="<?php if(isset($ten_sp)&&($ten_sp!="")) echo $ten_sp; ?>">
            <input type="text" name="gia" value="<?php if(isset($gia)&&($gia!="")) echo $gia; ?>">

            <input type="submit" value="Cập nhật sản phẩm" name="update">
        </form>
    <?php
    
    echo "Không tìm thấy thông tin sản phẩm.";
    
    ?>
</body>

</html>