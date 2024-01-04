<?php

class DanhBa {
    private $danhBa = [];

    public function themNguoiLienHe($ten, $sdt, $email) {
        // Tạo một mảng liên hợp đại diện cho người liên hệ
        $nguoiLienHe = [
            'ten' => $ten,
            'sdt' => $sdt,
            'email' => $email
        ];

        // Thêm người liên hệ vào danh bạ
        $this->danhBa[] = $nguoiLienHe;
    }

    public function hienThiThongTinTheoTen($ten) {
        // Tìm kiếm người liên hệ theo tên
        $nguoiLienHe = null;
        foreach ($this->danhBa as $nguoi) {
            if ($nguoi['ten'] == $ten) {
                $nguoiLienHe = $nguoi;
                break;
            }
        }

        // Hiển thị thông tin dưới dạng bảng HTML
        if ($nguoiLienHe) {
            echo "<table border='1'>";
            echo "<tr><th>Tên</th><th>Số điện thoại</th><th>Email</th></tr>";
            echo "<tr><td>{$nguoiLienHe['ten']}</td><td>{$nguoiLienHe['sdt']}</td><td>{$nguoiLienHe['email']}</td></tr>";
            echo "</table>";
        } else {
            echo "Không tìm thấy người liên hệ với tên $ten.";
        }
    }

    public function hienThiDanhSach() {
        // Hiển thị danh sách tất cả người liên hệ dưới dạng bảng HTML
        if (empty($this->danhBa)) {
            echo "Danh bạ trống.";
        } else {
            echo "<table border='1'>";
            echo "<tr><th>Tên</th><th>Số điện thoại</th><th>Email</th></tr>";
            foreach ($this->danhBa as $nguoi) {
                echo "<tr><td>{$nguoi['ten']}</td><td>{$nguoi['sdt']}</td><td>{$nguoi['email']}</td></tr>";
            }
            echo "</table>";
        }
    }
}

// Tạo một đối tượng DanhBa
$danhBa = new DanhBa();

// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $ten = $_POST["ten"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];

    // Thêm người liên hệ mới vào danh bạ
    $danhBa->themNguoiLienHe($ten, $sdt, $email);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh bạ</title>
</head>
<body>
    <h2>Thêm người liên hệ</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Tên: <input type="text" name="ten" required><br>
        Số điện thoại: <input type="text" name="sdt" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Thêm">
    </form>

    <h2>Thông tin người liên hệ</h2>
    <?php
    // Hiển thị thông tin của một người liên hệ dựa trên tên
    $danhBa->hienThiThongTinTheoTen("Nguyen Van A");
    ?>

    <h2>Danh sách người liên hệ</h2>
    <?php
    // Hiển thị danh sách tất cả các người liên hệ
    $danhBa->hienThiDanhSach();
    ?>
</body>
</html>
