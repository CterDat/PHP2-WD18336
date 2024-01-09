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

function loadOnePr() {
    if(isset($_GET['id'])&&($_GET['id']>0)) {
                    
                    
        $pr = getProductById($_GET['id']);
    }
    include "views/product/updateProduct.php";
}
function updatePr(){
    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
        $ten_sp= $_POST['ten_sp'];
        $gia = $_POST['gia'];
        updatePr($ten_sp,$gia);
        $thongbao="Cập nhật thành công";
    }

    $listOnePr = loadOnePr();
}

function deletePr(){
    $id = $_GET['id'];
    deleteProduct($id);
    listProduct();
}


