
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
    <h2 class="mb-4">Danh sách Sản Phẩm</h2>

    <!-- Nút Thêm -->
     <a href="index.php?url=viewCart" class="btn btn-primary mb-3">Cart</a>
     <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){ ?>
     <a href="index.php?url=exit" class="btn btn-primary mb-3">Thoát</a>
     
     <?php }else { ?>
     <a href="index.php?url=login" class="btn btn-primary mb-3">Đăng Nhập</a>
    <?php } ?>
    <?php
        if (isset($_SESSION['role']) && $_SESSION['role']) {
            // Hiển thị thẻ "Admin"
            echo '<a href="index.php?url=admin" class="btn btn-primary mb-3">Admin</a>';
        }
        ?>

    

   
     

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Thao Tác</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($listProduct as  $key => $value){?>
        <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["price"] ?></td>
            <td><img src="<?php echo $value["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td><?php echo $value["category_name"] ?></td>
            
            <td><form action="index.php?url=addtocart" method="post">
            <input type="hidden" name="id" value="<?=  $value["id"]?>">
            <input type="hidden" name="name" value="<?= $value["name"]?>">
            <input type="hidden" name="price" value="<?= $value["price"]?>">
            <input type="hidden" name="img" value="<?= $value["image"]?>">
            <input type="submit" name="addtocart" class="btn btn-warning" value="Thêm vào giỏ hàng">
            </form></td>
            
            <!-- <button type="button" class="btn btn-danger  btn-delete">Xóa</button> -->
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

</body>
</html>
