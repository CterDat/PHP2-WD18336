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



}
?>
