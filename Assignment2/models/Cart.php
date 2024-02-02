<?php
require_once "db.php";
class Cart extends db {
function loadall_order(){
    $sql = "select * from order_detail";
    return $this->getData($sql);
}

function loadall_tbl_order(){
    $sql ="
    SELECT id_order, id_user, hoten, sdt, email, diachi, tongtien,
    CASE
    WHEN pttt = 1 THEN 'Thanh toán khi nhận hàng'
    WHEN pttt = 2 THEN 'Chuyển khoản'
    ELSE 'Không xác định'
    END AS pttt_text,
    ngaydathang,
    CASE
    WHEN trangthai = 1 THEN 'Đang chờ duyệt'
    WHEN trangthai = 2 THEN 'Đã xác nhận'
    WHEN trangthai = 3 THEN 'Đang vận chuyển'
    WHEN trangthai = 4 THEN 'Hoàn thành'
    ELSE 'Không xác định'
    END AS trangthai_text
    FROM tbl_order;
    ";   
    return $this->getData($sql);
}

function delete_order_detail($id){
    $sql = "delete from order_detail where id_order_detail = ".$id;
    return $this->getData($sql, false);
}
function delete_tbl($id){
    $sql = "delete from tbl_order where id_order = ".$id;
    return $this->getData($sql, false);
}
function loadone_tbl($id_order){
    $sql = "select * from tbl_order where id_order=".$id_order;
    return $this->getData($sql);
              
}
function update_tbl($id_order,$trangthai){
    $sql = "update tbl_order set trangthai='".$trangthai."'where id_order=".$id_order;
    return $this->getData($sql, false);
}
function addOrder($user, $sdt, $email, $diachi, $tongtien, $pttt, $name){
    $sql="INSERT INTO tbl_order (user, sdt, email, diachi, tongtien, pttt, name) VALUES ('$user', '$sdt', '$email', '$diachi', $tongtien, $pttt, '$name');";
    return $this->getData($sql);
}
function loadAllBill(){
    $sql = "select id_order, user, sdt, email, diachi, tongtien,
            CASE
            WHEN pttt = 1 THEN 'Thanh toán khi nhận hàng'
            WHEN pttt = 2 THEN 'Chuyển khoản'
            ELSE 'Không xác định'
            END AS pttt_text,
            CASE
            WHEN trangthai = 1 THEN 'Đang chờ duyệt'
            WHEN trangthai = 2 THEN 'Đã xác nhận'
            WHEN trangthai = 3 THEN 'Đang vận chuyển'
            WHEN trangthai = 4 THEN 'Hoàn thành'
            ELSE 'Không xác định'
            END AS trangthai_text,
            name
            FROM tbl_order;
    ";
    return $this->getData($sql);
}
}
// function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
//     $sql="INSERT INTO order_detail (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
//     return $this->getData($sql);
// }


?>
