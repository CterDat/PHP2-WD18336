<?php
require_once "db.php";

class Cart extends db {
    public function getCartItems($product_ids) {
        $product_ids = implode(',', $product_ids);
        $sql = "SELECT pr.id, pr.name, pr.price, pr.image, ct.category_name 
                FROM product AS pr 
                INNER JOIN category AS ct ON ct.id = pr.id_category 
                WHERE pr.id IN ($product_ids)";
        return $this->getData($sql);
    }
}
?>