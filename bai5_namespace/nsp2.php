<?php
// lưu ý: khởi tạo namespace thì namespace phải nằm ở trên cùng của ddojajn mã nguồn
namespace NSP222;

class SinhVien{
    public $ten;
    public $tuoi;

    public function __construct($ten, $tuoi){
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }

    public function hienThiThongTin(){
        echo "Tên: ".$this->ten."<br>";
        echo "Năm sinh: ".$this->tuoi."<br>";
    }
}

?>