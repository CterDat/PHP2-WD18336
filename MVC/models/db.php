<?php
require_once "env.php";
//tạo kết nối từ project php sang mysql

function getConnect(){
    $connect = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME
    .";charset=".DBCHARSET,
    DBUSER,
    DBPASS
    );
    return $connect;
}

//Nếu như dùng đê lấy danh sách thì sẽ truyền vào true
//nếu như dùng để thêm, sửa, xóa thì false
function getData($query, $getAll = true) {
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if ($getAll) {
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}

?>