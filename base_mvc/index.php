<?php
//Lưu ý Tạo Folder app => chuyển mvc vô
// include_once "models/Product.php";
// include_once "controllers/ProductController.php";
require_once "vendor/autoload.php";
use App\Controllers\ProductController;
use App\Models\Product;

$pro = new Product();
echo "<br>";
$proCon = new ProductController();