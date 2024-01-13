<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        listProduct();
        break;
    case 'add-product':
        if (isset($_POST['Save'])) {
            addProducts($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['id_category']);
        }
        addProduct();
        break;
    case 'update-product':
        if (isset($_POST['update'])) {
            postUpdateProduct($_POST['name'], $_POST['price'],$_FILES['image'],$_POST['id_category']);
        }
        updateView();
        break;
    case 'delete-product':
        postDeleleProduct();
        break;

}