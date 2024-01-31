<?php
require_once "controllers/ProductController.php";
require_once "controllers/CartController.php";
require_once "controllers/AccountController.php";
session_start();
ob_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$productController = new ProductController();
$CartController = new CartController();
$AccountController = new AccountController();
switch ($url) {
    case '/':   
        $productController->listProduct();
        break;
    case 'admin':
        $productController->listAdmin();
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
        # code...
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