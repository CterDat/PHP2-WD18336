
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Sản Phẩm</title>
    <style>
    #totalProduct {
      color: #fff;
      background-color: red;
      font-size: 12px;
      padding: 5px;
      border-radius: 50%;
    }
  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Giỏ Hàng</h2>

    <!-- Nút Thêm -->
    <a href="index.php?url=add-product" class="btn btn-primary mb-3">Thêm</a> <a href="index.php" class="btn btn-primary mb-3">Home</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành Tiền</th>
            <th scope="col">Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $tong = 0;
        $i = 0;
        foreach ($_SESSION['mycart'] as  $cart){
        $ttien=$cart[2]*$cart[4];
        $tong += $ttien;
        $delCart = '<a href="index.php?url=delCart&idcart='.$i.'"><input type="button" class="btn btn-warning" value="Xóa"></a>';
        $addCart = '<a href="index.php?url=bill"><input type="button" class="btn btn-primary mb-3"  value="Xác nhận đặt hàng"></a>';
        ?>
        <tr>
            <th scope="row"><?php echo $cart[0] ?></th>
            <td><?php echo $cart[1] ?></td>
            <td><?php echo $cart[2] ?></td>
            <td><?php echo $cart[3] ?></td>
            <td><?php echo $cart[4] ?></td>
            <td><?php echo $cart[5] ?></td>
            <td><?php echo $delCart; ?> <?php ?></td>
            
            <!-- <button type="button" class="btn btn-danger  btn-delete">Xóa</button> -->
        </tr>
        <?php $i+=1; ?>
        <?php } ?>
        <tr>
        <td colspan="5">Tổng tiền</td>
        <td><?php echo $tong ?></td>
        <td><?php echo $addCart ?></td>
        </tr>

        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

</body>
</html>
