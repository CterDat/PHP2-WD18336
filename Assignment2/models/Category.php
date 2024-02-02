<?php
require_once "db.php";
class Category extends db{
function getAllCategory(){
    $sql = "SELECT * FROM category";
    return $this->getData($sql);
}
function insertCategory($category_name){
    $sql = "INSERT INTO category(id, category_name) VALUES('null','$category_name');";
    return $this->getData($sql);
}

function getCategory($category_id){
    $sql = "SELECT id,category_name FROM category  WHERE id = '{$category_id}';";
    return $this->getData($sql, false);
}

function updateCategory($category_id, $category_name) {
    $sql = "UPDATE category SET category_name='{$category_name}' WHERE id='{$category_id}' ";
    return $this->getData($sql, false);
}

function deleteProduct($category_id) {
    $sql = "DELETE FROM category WHERE id='{$category_id}'";
    return $this->getData($sql, false);
}
}
?>