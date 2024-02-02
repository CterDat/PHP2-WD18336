<?php
require_once "models/Category.php";
require_once "models/Product.php";
class CategoryController{
    function listCategory()
{
    $listCategory = new Category();
    $listCategory = $listCategory->getAllCategory();
    include "views/admin/category/list.php";
}

function addCategory($category_name)
{
   $category = new Category();
   $check = $category->insertCategory($category_name);
   if (!$check) {
    echo '<script>alert("Thêm Loại thành công");</script>';
    echo '<script>window.location.href = "index.php?url=listCategory";</script>';
} else {
    echo '<script>alert("Lỗi khi thêm sản phẩm vào cơ sở dữ liệu");</script>';
}
}

function updateView()
{
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    $listCategory = new Category();
    // $listProduct = new Product();
    $listCategory = $listCategory->getCategory($category_id);
    // $listProduct = $listProduct->getProduct($product_id);
    include "views/admin/category/update.php";
}

function postUpdateCategory($category_name)
{

    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    // $category = new Category();
    // $category = $category->getCategory($category_id);

    $category = new Category();
    $check = $category->updateCategory($category_id, $category_name);

    if (!$check) {
        echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php?url=listCategory";</script>';
    } else {
        echo '<script>alert("Cap nhat sản phẩm that bai")</script>';
        echo '<script>window.location.href = "index.php?url=admin";</script>';
    }
}

function postDeleleCategory()
{
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    // $check = echo '<script>var a = prompt("ban co chac chan muon xoa?")</script>';

    $category = new Category();
    $category->deleteProduct($category_id);
    echo '<script>alert("Xoa sản phẩm thành công")</script>';
    echo '<script>window.location.href = "index.php?url=listCategory";</script>';
}
}