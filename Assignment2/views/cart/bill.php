
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
    <h2 class="mb-4">Thanh Toán</h2>

    <!-- Nút Thêm -->
    <a href="index.php" class="btn btn-primary mb-3">Home</a>
    <form action="index.php?url=billconfirm" method="post" >
    <table class="table">
    <h3 class="mb-3">Thông tin khác hàng</h3>
    <thead>
        <?php
        if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $tel = $_SESSION['tel'];

        }else{
            $name = "";
            $address = "";
            $email = "";
            $tel = "";
        }
        ?>
        <tr>
            <th scope="col">Người đặt hàng</th>
            <td><input type="text" class="form-control form-control" name="user" value="<?=$user?>"></td>
        </tr>
        <tr>
            <th scope="col">Địa chỉ</th>
            <td><input type="text" class="form-control form-control" name="diachi" value="<?=$address?>"></td>
        </tr>
        <tr>
            <th scope="col">Email</th>
            <td><input type="text" class="form-control form-control" name="email" value="<?=$email?>"></td>
        </tr>
        <tr>
            <th scope="col">SĐT</th>
            <td><input type="text" class="form-control form-control" name="sdt" value="<?=$tel?>"></td>
        </tr>
    </thead>
    </table>

    <table class="table">
    <h3 class="mb-3">Phương thức thanh toán</h3>
        <thead>
            <tr><p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
            <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p></tr>

        </thead>
    </table>
    <!-- Bảng Bootstrap -->
    <table class="table">
    <h3 class="mb-3">Giỏ hàng</h3>
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
        $addCart = '<input type="submit" name="order_confirm" class="btn btn-primary mb-3"  value="Xác nhận đặt hàng">';
        
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
            
            <input type="hidden" name="name" value="<?= $cart[1]?>">
            <input type="hidden" name="tongtien" value="<?= $cart[5]?>">
        <td><?php echo $addCart ?></td>
        </tr>

        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
    </form>
</div>

</body>
</html>
