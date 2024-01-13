<?php
require_once "db.php";
function getAllProduct(){
    $sql = "SELECT pr.id, pr.name, pr.price, pr.image, ct.category_name FROM product AS pr INNER JOIN category AS ct ON ct.id = pr.id_category;";
    return getData($sql);
}
function insertProduct($name, $price, $image, $id_category){
    $sql = "INSERT INTO product(id, name, price, image, id_category) VALUES('null','$name','$price','$image','$id_category');";
    return getData($sql);
}

function getProduct($product_id) {
    $sql = "SELECT pr.id, pr.name, pr.price, pr.image, ct.category_name FROM product AS pr INNER JOIN category AS ct ON ct.id = pr.id_category WHERE pr.id = '{$product_id}';";
    return getData($sql, false);
}

function updateProduct($product_id, $name, $price, $image, $id_category) {
    $sql = "UPDATE product SET name='{$name}', price='{$price}', image='{$image}', id_category='{$id_category}' WHERE id='{$product_id}' ";
    return getData($sql, false);
}

function deleteProduct($product_id) {
    $sql = "DELETE FROM product WHERE id='{$product_id}'";
    return getData($sql, false);
}