<?php

// require_once "models/Cart.php";
// require_once "models/Category.php";
require_once "models/Product.php";
// session_start();
class CartController {
    public function addToCart($product_id, $quantity) {
        // Lấy thông tin sản phẩm từ CSDL
        $productModel = new Product();
        $product = $productModel->getProduct($product_id);

        if ($product) {
            // Kiểm tra nếu giỏ hàng không tồn tại thì tạo mới
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            if (isset($_SESSION['cart'][$product_id])) {
                // Nếu đã tồn tại, cộng thêm số lượng mới vào số lượng cũ
                $_SESSION['cart'][$product_id]['quantity'] += $quantity;
            } else {
                // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
                $_SESSION['cart'][$product_id] = [
                    'product_id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'quantity' => $quantity
                ];
            }

            echo '<script>alert("Thêm vào giỏ hàng thành công");</script>';
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Sản phẩm không tồn tại");</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }

    public function updateCart($product_id, $quantity) {
        if (isset($_SESSION['cart'][$product_id])) {
            // Kiểm tra số lượng mới, nếu <= 0 thì xóa sản phẩm khỏi giỏ hàng
            if ($quantity <= 0) {
                unset($_SESSION['cart'][$product_id]);
            } else {
                // Cập nhật số lượng mới cho sản phẩm trong giỏ hàng
                $_SESSION['cart'][$product_id]['quantity'] = $quantity;
            }

            echo '<script>alert("Cập nhật giỏ hàng thành công");</script>';
            echo '<script>window.location.href = "view.php";</script>';
        } else {
            echo '<script>alert("Sản phẩm không tồn tại trong giỏ hàng");</script>';
            echo '<script>window.location.href = "view.php";</script>';
        }
    }

    public function removeFromCart($product_id) {
        if (isset($_SESSION['cart'][$product_id])) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['cart'][$product_id]);

            echo '<script>alert("Xóa khỏi giỏ hàng thành công");</script>';
            echo '<script>window.location.href = "view.php";</script>';
        } else {
            echo '<script>alert("Sản phẩm không tồn tại trong giỏ hàng");</script>';
            echo '<script>window.location.href = "view.php";</script>';
        }
    }

    public function clearCart() {
        // Xóa toàn bộ giỏ hàng
        unset($_SESSION['cart']);

        echo '<script>alert("Xóa giỏ hàng thành công");</script>';
        echo '<script>window.location.href = "view.php";</script>';
    }
}
?>