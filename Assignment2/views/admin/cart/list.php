
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bill của tôi</title>
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

    <!-- Nút Thêm -->
    <h2 class="mb-4">Danh sách Đơn Hàng</h2>
    <a href="index.php" class="btn btn-primary mb-3">Trang Chủ</a>
    <a href="index.php?url=admin" class="btn btn-primary mb-3">Product</a>
    <a href="index.php?url=listCategory" class="btn btn-primary mb-3">Category</a>
    <a href="index.php?url=showcart" class="btn btn-primary mb-3">Cart</a>


    

   
     

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">User</th>
            <th scope="col">SĐT</th>
            <th scope="col">Email</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Tổng Tiền</th>
            <th scope="col">Thanh Toán</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao Tác</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as  $key => $value){
    
            ?>
        <tr>
            <?php if ($value['trangthai_text'] == "Hoàn thành") { ?>
            <th scope="row"><?php echo $value["id_order"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["user"] ?></td>
            <td><?php echo $value["sdt"] ?></td>
            <td><?php echo $value["email"] ?></td>
            <td><?php echo $value["diachi"] ?></td>
            <td><?php echo $value["tongtien"] ?></td>
            <td><?php echo $value["pttt_text"] ?></td>
            <td><?php echo $value['trangthai_text'] ?></td>
            <?php }else{?>
            <th scope="row"><?php echo $value["id_order"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["user"] ?></td>
            <td><?php echo $value["sdt"] ?></td>
            <td><?php echo $value["email"] ?></td>
            <td><?php echo $value["diachi"] ?></td>
            <td><?php echo $value["tongtien"] ?></td>
            <td><?php echo $value["pttt_text"] ?></td>
            <td><?php echo $value['trangthai_text'] ?></td>
            <td><a href="index.php?url=update-cart&id_order=<?php echo $value["id_order"] ?>" class="btn btn-warning">Chỉnh sửa</a></td>
        </tr>
        <?php } } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

</body>
</html>
