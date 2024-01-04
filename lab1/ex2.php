<?php
class QuanLySanPham {
    private $danhSachSanPham = array();

    // Thêm sản phẩm mới vào danh sách
    public function themSanPham($maSanPham, $tenSanPham, $giaSanPham) {
        $sanPham = array(
            'maSanPham' => $maSanPham,
            'tenSanPham' => $tenSanPham,
            'giaSanPham' => $giaSanPham
        );

        $this->danhSachSanPham[$maSanPham] = $sanPham;
        echo "<br>Đã thêm sản phẩm mới: $tenSanPham";
    }

    // Hiển thị thông tin chi tiết về một sản phẩm dựa trên mã sản phẩm
    public function hienThiChiTietSanPham($maSanPham) {
        if (isset($this->danhSachSanPham[$maSanPham])) {
            $sanPham = $this->danhSachSanPham[$maSanPham];
            echo "<table border='1'>";
            echo "<tr><th colspan='2'>Thông tin chi tiết sản phẩm $maSanPham</th></tr>";
            echo "<tr><td>Mã sản phẩm</td><td>{$sanPham['maSanPham']}</td></tr>";
            echo "<tr><td>Tên sản phẩm</td><td>{$sanPham['tenSanPham']}</td></tr>";
            echo "<tr><td>Giá sản phẩm</td><td>{$sanPham['giaSanPham']}</td></tr><br>";
            echo "</table>";
        } else {
            echo "Không tìm thấy sản phẩm có mã là $maSanPham\n";
        }
    }

    // Hiển thị danh sách tất cả các sản phẩm
    public function hienThiDanhSachSanPham() {
        echo "<table border='1'>";
        echo "<tr><th>Mã sản phẩm</th><th>Tên sản phẩm</th><th>Giá sản phẩm</th></tr>";
        foreach ($this->danhSachSanPham as $maSanPham => $sanPham) {
            echo "<tr><td>{$sanPham['maSanPham']}</td><td>{$sanPham['tenSanPham']}</td><td>{$sanPham['giaSanPham']}</td></tr><br>";
        }
        echo "</table>";
    }
}

// Sử dụng ứng dụng quản lý sản phẩm
$quanLySanPham = new QuanLySanPham();

$quanLySanPham->themSanPham("SP001", "Laptop Dell", 15000000);
$quanLySanPham->themSanPham("SP002", "Smartphone Samsung", 8000000);

// Sử dụng hàm mới để hiển thị thông tin trong bảng HTML
$quanLySanPham->hienThiChiTietSanPham("SP001");
$quanLySanPham->hienThiChiTietSanPham("SP002");

// Sử dụng hàm mới để hiển thị danh sách sản phẩm trong bảng HTML
$quanLySanPham->hienThiDanhSachSanPham();
?>
