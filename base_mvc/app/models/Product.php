<?php
namespace App\Models;
class Product extends BaseModel{
    protected $table = "product";

    //lấy danh sách sản phẩm
    public function getProduct(){
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addProduct($id,$name,$price){
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$price]);
    }

    //hàm truyền id để lấy chi tiết sản phẩm
    public function getDetailProduct($id){
        $sql = "select * from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow($id);
    }
    //xây dựng sửa sản phẩm

    public function updateProduct($id, $name, $price){
        $sql = "update $this->table set name = ?, price = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $price]);
    }

    //xóa sản phẩm
    public function deleteProduct($id){
        $sql = "delete form $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}