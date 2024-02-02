<?php
require_once "env.php";
//Tên file và tên class trùng nhau
class db{
// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" . DBHOST
        . ";dbname=" . DBNAME
        . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}



// nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
//sẽ chạy được các câi truy vấn như thêm sửa xóa
function getData($query, $getAll = true){
    //Khi có class thì phải đổi thành $this->getConnect();
    $conn = $this->getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll) {
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}

}
?>