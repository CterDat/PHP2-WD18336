<?php
class DanhBa {
    private $danhBa = array();

    // Thêm người liên hệ mới vào danh bạ
    public function themNguoiLienHe($ten, $thongTin) {
        $this->danhBa[$ten] = $thongTin;
        // echo "Đã thêm người liên hệ: $ten\n";
    }

    // Hiển thị thông tin của một người liên hệ dựa trên tên
    public function hienThiThongTin($ten) {
        if (isset($this->danhBa[$ten])) {
            echo "<table border='1'>";
            echo "<tr><th colspan='2'>Thông tin của $ten</th></tr>";
            
            // Phân tách thông tin liên hệ thành các dòng
            $thongTinArr = explode(', ', $this->danhBa[$ten]);
    
            foreach ($thongTinArr as $thongTin) {
                list($thongTinKey, $thongTinValue) = explode(': ', $thongTin);
                echo "<tr><td>$thongTinKey</td><td>$thongTinValue</td></tr><br>";
            }
    
            echo "</table>";
        } else {
            echo "<br>Không tìm thấy người liên hệ có tên là $ten\n";
        }
    }

    // Hiển thị danh sách tất cả các người liên hệ dưới dạng bảng HTML
    public function hienThiDanhSach() {
        echo "<table border='1'>";
        echo "<tr><th>Tên</th><th>Thông tin liên hệ</th></tr>";
        foreach ($this->danhBa as $ten => $thongTin) {
            echo "<tr><td>$ten</td><td>$thongTin</td></tr> <br>";
        }
        echo "</table>";
    }
}

// Sử dụng ứng dụng quản lý danh bạ
$danhBa = new DanhBa();

$danhBa->themNguoiLienHe("Ngô Văn Đạt", "Email: Ngodat13032004@gmail.com, Điện thoại: 0357717435");
$danhBa->themNguoiLienHe("Ngô Quang Huy", "Email: NgoHuy123@gmail.com, Điện thoại: 0357717435");

$danhBa->hienThiThongTin("Ngô Văn Đạt");
$danhBa->hienThiThongTin("Đỗ Văn Toàn");

$danhBa->hienThiDanhSach(); // Sử dụng hàm mới để hiển thị danh sách dưới dạng bảng HTML
?>
