<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Loại sản phẩm</title>
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
    <h2 class="mb-4">Danh sách Loại sản phẩm</h2>
    <a href="index.php" class="btn btn-primary mb-3">Trang Chủ</a>
    <a href="index.php?url=admin" class="btn btn-primary mb-3">Product</a>
    <a href="index.php?url=listCategory" class="btn btn-primary mb-3">Category</a>
    <br>
        <!-- Nút Thêm -->
    <a href="index.php?url=add-category" class="btn btn-primary mb-3">Thêm</a> 

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Loại</th>
            <th scope="col">Thao tác</th>
            

        </tr>
        </thead>
        <tbody>
        <?php foreach ($listCategory as  $key => $value){?>
        <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <th scope="row"><?php echo $value["category_name"] ?></th>
            
            <td><a href="index.php?url=update-category&category_id=<?php echo $value["id"] ?>" class="btn btn-warning">Sửa</a> <a href="index.php?url=delete-category&category_id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa</a></button></td>
            <!-- <button type="button" class="btn btn-danger  btn-delete">Xóa</button> -->
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

</body>
</html>
