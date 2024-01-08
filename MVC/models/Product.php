<?php
require_once "db.php";

//Xây dụng hàm truy vấn để danh sách sản phẩm

function getProduct(){
    $sql = "SELECT * FROM product";
    return getData($sql);
}

function addProduct($ten_sp, $gia) {
    $sql = "INSERT INTO product (ten_sp, gia) VALUES ('$ten_sp', '$gia')";
    return getData($sql, false);
}

function updateProduct($id, $ten_sp, $gia) {
    $sql = "UPDATE product SET ten_sp = '".$ten_sp."', gia = '".$gia."' WHERE id =".$id;
    return getData($sql, false);
}

function getProductById($id) {
    $sql = "SELECT * FROM product WHERE id = $id";
    return getData($sql, true);
}

function deleteProduct($id) {
    $sql = "DELETE FROM product WHERE id = $id";
    return getData($sql, false);
}

