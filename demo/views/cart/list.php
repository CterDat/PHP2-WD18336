<?php
// session_start();
// require_once "models/Cart.php";

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartModel = new Cart();
    $product_ids = array_keys($_SESSION['cart']);
    $cartItems = $cartModel->getCartItems($product_ids);

    echo '<h1>Giỏ Hàng</h1>';

    echo '<table>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Hình Ảnh</Xin lỗi, đoạn mã đã bị cắt ngắn. Đây là phần tiếp theo của file view.php:

```php
                <th>Hình Ảnh</th>
                <th>Danh Mục</th>
                <th>Số Lượng</th>
                <th>Thao Tác</th>
            </tr>';

    foreach ($cartItems as $item) {
        $product_id = $item['id'];
        $product_name = $item['name'];
        $product_price = $item['price'];
        $product_image = $item['image'];
        $product_category = $item['category_name'];
        $product_quantity = $_SESSION['cart'][$product_id]['quantity'];

        echo '<tr>
                <td>'.$product_id.'</td>
                <td>'.$product_name.'</td>
                <td>'.$product_price.'</td>
                <td><img src="'.$product_image.'" alt="Hình Ảnh" style="max-width: 100px;"></td>
                <td>'.$product_category.'</td>
                <td>'.$product_quantity.'</td>
                <td>
                    <a href="index.php?action=update&product_id='.$product_id.'">Cập nhật</a>
                    <a href="index.php?action=remove&product_id='.$product_id.'">Xóa</a>
                </td>
            </tr>';
    }

    echo '</table>';

    echo '<a href="index.php?action=clear">Xóa Giỏ Hàng</a>';
} else {
    echo '<h1>Giỏ Hàng Trống</h1>';
}
?>