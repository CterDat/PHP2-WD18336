<?php
require_once "models/Category.php";
require_once "models/Product.php";
require_once "models/Cart.php";

class CartController extends Cart{
function addToCart(){
        if (!isset($_SESSION["mycart"])) {
            $_SESSION["mycart"] = [];
        }

        if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $img = $_POST['img'];
            $quantity = 1;
            $total = $quantity * $price;
            $proAdd = [$id, $name, $price, $img, $quantity, $total];
            array_push($_SESSION["mycart"], $proAdd);
        }

        include_once "views/cart/viewCart.php";
}
function delCart(){

    if (isset($_GET["idcart"])){
        array_splice($_SESSION['mycart'], $_GET["idcart"], 1);
    }else{
        $_SESSION['mycart'] = [];
    }
    header('Location: index.php?url=viewCart');
}

function order() {
    $user = $_POST['user'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $tongtien = $_POST['tongtien'];
    $pttt = $_POST['pttt'];
    $name = $_POST['name'];
    $cart = new CartController();
    $check = $cart->addOrder($user, $sdt, $email, $diachi, $tongtien, $pttt, $name);
    if (!$check) {
        $_SESSION['mycart'] = [];
        echo '<script>alert("Thanh toán thành công");</script>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Lỗi khi Thanh toán");</script>';
    }

}

function loadAllBill(){
    $cart = new Cart();
    $cart = $cart->loadAllBill();
    include "views/cart/mybill.php";
}

function loadAllBillAdmin(){
    $cart = new Cart();
    $cart = $cart->loadAllBill();
    include "views/admin/cart/list.php";
}


function updateView()
{
    $id_order = isset($_GET['id_order']) ? $_GET['id_order'] : null;
    $listCart= new Cart();
    // $listProduct = new Product();
    $listCart = $listCart->getCart($id_order);
    // $listProduct = $listProduct->getProduct($product_id);
    include "views/admin/cart/update.php";
}

function postUpdateCart($trangthai)
{

    $id_order = isset($_GET['id_order']) ? $_GET['id_order'] : null;
    // $category = new Category();
    // $category = $category->getCategory($category_id);

    $cart = new Cart();
    $check = $cart->updateCart($id_order, $trangthai);

    if (!$check) {
        echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php?url=showcart";</script>';
    } else {
        echo '<script>alert("Cap nhat sản phẩm that bai")</script>';
        echo '<script>window.location.href = "index.php?url=showcart";</script>';
    }
}

}
?>
