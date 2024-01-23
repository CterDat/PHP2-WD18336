<?php
require_once "controllers/ProductController.php";
require_once "controllers/CartController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$productController = new ProductController();
$cartController = new CartController();
switch ($url) {
    case '/':   
        $productController->listProduct();
        break;
    case 'add-product':
        if (isset($_POST['Save'])) {
            $productController->addProducts($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['id_category']);
        }
        $productController->addProduct();
        break;
    case 'update-product':
        if (isset($_POST['update'])) {
            $productController->postUpdateProduct($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['id_category']);
        }
        $productController->updateView();
        break;
    case 'delete-product':
        $productController->postDeleleProduct();
        break;

    case'add':
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $cartController->addToCart($product_id, $quantity);
        require_once "views/cart/list.php";
        break;
    case'update-cart':
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $cartController->updateCart($product_id, $quantity);
        break;
    case'remove-cart':
        $product_id = $_GET['product_id'];
        $cartController->removeFromCart($product_id);
        break;
    case'clear-cart':
        $cartController->clearCart();
        break;
}