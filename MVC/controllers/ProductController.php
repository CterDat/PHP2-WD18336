<?php
require_once "models/Product.php";

function listProduct(){
    //tạo biến hứng dữ liệu từ model
    $product = getProduct();
    // echo "<pre>";
    // var_dump($products);
    // die();
    include ("views/product/listProduct.php");
}

