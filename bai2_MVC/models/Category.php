<?php
require_once "db.php";
function getAllCategory(){
    $sql = "SELECT * FROM category";
    return getData($sql);
}