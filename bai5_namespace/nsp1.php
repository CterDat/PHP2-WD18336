<?php
// lưu ý: khởi tạo namespace thì namespace phải nằm ở trên cùng của đoạn mã nguồn
namespace NSP111;

class SinhVien{
    public $ten;
    public $namsinh;

    public function __construct($ten, $namsinh){
        $this->ten = $ten;
        $this->namsinh = $namsinh;
    }

    public function hienThiThongTin(){
        echo "Tên: ".$this->ten."<br>";
        echo "Năm sinh: ".$this->namsinh."<br>";
    }
}

?>