<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Chức năng</td>
        </tr>
        <tr>
            <?php foreach ($product as $key => $value) { 
                $updateSp = "index.php?url=updatepr&id=" . $value['id'];
                $deleteSp = "index.php?url=deletepr&id=" . $value['id'];                
                ?>
              <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['ten_sp']; ?></td>
                <td><?php echo $value['gia']; ?></td>
                <td><a href="<?php echo $updateSp; ?>"><input type="button" value="Sửa"></a><a href="<?php echo $deleteSp; ?>"><input type="button" value="Xóa"></a></td>
              </tr>  
            <?php } ?>
        </tr>
        <tr>
            <form action="index.php?url=addpr" method="post">
                <td></td>
                <td><input type="text" name="ten_sp" id=""></td>
                <td><input type="text" name="gia" id=""></td>
                <td><input type="submit" value="ADD PRODUCT"></td>
            </form>
        </tr>
       
    </table>
</body>
</html>


<!-- <?php if (isset($_GET['id']) && $_GET['id'] == $value['id']) { ?>
                <tr>
                    <td colspan="4">
                        <form method="POST" action="index.php?url=updatepr">
                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <label for="ten_sp">Tên sản phẩm:</label>
                            <input type="text" name="ten_sp" id="ten_sp" value="<?php echo $value['ten_sp']; ?>" required>

                            <label for="gia">Giá:</label>
                            <input type="number" name="gia" id="gia" value="<?php echo $value['gia']; ?>" required>

                            <button type="submit">Cập nhật</button>
                        </form>
                    </td>
                </tr>
            <?php } ?> -->