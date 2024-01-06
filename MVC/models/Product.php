<?php
require_once "db.php";

//Xây dụng hàm truy vấn để danh sách sản phẩm

function getProduct(){
    $sql = "SELECT * FROM product";
    return getData($sql);
}

function addProduct($id,$ten_sp,$gia){
    $sql = "INSERT INTO ";
    return getData($sql, false);
}

