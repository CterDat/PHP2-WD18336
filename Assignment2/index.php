<?php
require_once "controllers/ProductController.php";
require_once "controllers/CartController.php";
require_once "controllers/AccountController.php";
require_once "controllers/CategoryController.php";
session_start();
ob_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$productController = new ProductController();
$CartController = new CartController();
$AccountController = new AccountController();
$CategoryController = new CategoryController();
// if (isset($_SESSION['user'])) {
//     $username = $_SESSION['user'];
    
//         $email = $_SESSION['email'];
//         $address = $_SESSION['address'];
//         $tel = $_SESSION['tel'];
//     echo "Thông tin tài khoản: $username";
//     echo "Thông tin tài khoản: $email";
//     echo "Thông tin tài khoản: $address";
//     echo "Thông tin tài khoản: $tel";
// } else {
//     echo "Bạn chưa đăng nhập.";
// }
switch ($url) {
    case '/':   
        $productController->listProduct();
        break;
    case 'admin':
        $productController->listAdmin();
        break;
    case 'listCategory':
        $CategoryController->listCategory();
        break;
    case 'add-category':
        if (isset($_POST['Save'])) {
            $CategoryController->addCategory($_POST['category_name']);
        }
        include "views/admin/category/add.php";
        break;
    case 'delete-category':
        $CategoryController->postDeleleCategory();
        break;
    case 'update-category':
        if (isset($_POST['update'])) {
            $CategoryController->postUpdateCategory($_POST['category_name']);
        }
        $CategoryController->updateView();
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
    case 'addtocart':
        $CartController->addToCart();
        break;
    case 'delCart':
        $CartController->delCart();
        break;
    case 'viewCart':
        include "views/cart/viewCart.php";
        break;
    case 'bill':
        include "views/cart/bill.php";
        break;
    case 'mybill':
        $CartController->loadAllBill();
        break;
    case 'billconfirm':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $CartController->order();
        }
        break;
    case 'showcart':
        $CartController->loadAllBillAdmin();
        break;
    case 'update-cart':
        if (isset($_POST['update'])) {
            $CartController->postUpdateCart($_POST['trangthai']);
        }
        $CartController->updateView();
        break;
    case 'login':
        $AccountController->login();    
        include "views/account/login.php";
        break;
    case 'signin':
        $AccountController->register();
        include "views/account/register.php";
        break;
    case 'exit':
        session_unset();
        $AccountController->exit();
        break;
    ob_end_flush();
}