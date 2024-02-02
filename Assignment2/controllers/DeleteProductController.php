<?php
if (isset($_GET['check'])) {
    $checkValue = $_GET['check'];

    // Kiểm tra giá trị và thực hiện hành động tương ứng
    if ($checkValue != null) {
        // Thực hiện hành động khi người dùng chọn "yes"
        echo "Bạn đã chọn yes. Thực hiện xóa sản phẩm hoặc hành động khác ở đây.";
    } 
}
?>