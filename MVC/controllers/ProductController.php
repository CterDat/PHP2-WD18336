<?php
require_once "models/Product.php";

function listProduct(){
    //tạo biến hứng dữ liệu từ model
    $product = getProduct();
    // $deleteProduct = deleteProduct();
    // echo "<pre>";
    // var_dump($products);
    // die();
    include ("views/product/listProduct.php");
}
function addPr(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ten_sp = $_POST['ten_sp'];
        $gia = $_POST['gia'];
        addProduct($ten_sp, $gia);
        // Thực hiện các xử lý sau khi thêm sản phẩm thành công
        echo "Thêm sản phẩm thành công!";
        listProduct();
    }
}
function updatePr(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Xử lý khi nhận dữ liệu POST
        $id = $_POST['id'];
        $ten_sp = $_POST['ten_sp'];
        $gia = $_POST['gia'];
        updateProduct($id, $ten_sp, $gia);
        // Thực hiện các xử lý sau khi sửa thông tin sản phẩm thành công
        echo "Cập nhật sản phẩm thành công!";
        listProduct(); // Để quay lại trang danh sách sản phẩm sau khi cập nhật thành công
    }
}

function deletePr(){
    $id = $_GET['id'];
    deleteProduct($id);
    listProduct();
}


