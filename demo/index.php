<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
$productController = new ProductController();
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

}