<?php
//Lưu ý Tạo Folder app => chuyển mvc vô
// include_once "models/Product.php";
// include_once "controllers/ProductController.php";
require_once "env.php";
require_once "vendor/autoload.php";
require_once "common/route.php";
use App\Controllers\ProductController;


$product = new ProductController();
var_dump($product->index());

