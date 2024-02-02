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
    <h2 class="mb-4">Cập Nhật Loại</h2>
    <form action="index.php?url=update-category&category_id=<?php echo $listCategory['id'] ?>" method="POST" >
        <?php if($listCategory) { ?>
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="name" name="category_name" value="<?php echo $listCategory['category_name'] ?>" placeholder="Nhập tên sản phẩm">
        </div>
        <?php } ?>
        

        <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
