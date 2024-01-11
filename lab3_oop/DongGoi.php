<?php

//class là tập hợp của nhiều đối tượng có cùng thuộc tính.
//khai báo class
class SinhVien{
    //khai báo thuộc tính
    //Đơn giản là khai báo biến trong class
    public $maSv;
    public $tenSv;
    public $namSinh;

    //khai báo phương thức ko trả về & không tham số
    //đơn giản là khai báo hàm trong class

    // public function getInfo(){
    //     // trong lập trình hướng đối tượng, muốn sử dụng thuộc tính thì
    //     // phải sử dụng biến $this-> tên thuộc tính
    //     echo $this->maSv,"-".$this->tenSv,"-".$this->namSinh;
    // }

    //khai báo phương thức có trả về
    // public function getMaSV(){
    //     return $this->maSv;
    // }
    // public function setMaSV($maSv){
    //     $this->maSv=$maSv;
    // }

    //Magic function
    public function __construct($maSv,$tenSv,$namSinh){
        $this->maSv= $maSv;   
        $this->tenSv= $tenSv;
        $this->namSinh= $namSinh;
    }
    public function setMaSV($ma){
        $this->maSv=$ma;
    }
    public function setTenSV($ten){
        $this->tenSv=$ten;
    }
    public function setNamSinh($namsinh){
        $this->namSinh=$namsinh;
    }
    public function age(){
        return date('Y') - $this->namSinh;
    }
    // hiển thị toàn bộ thông tin
    public function hienThiThongTin(){
        echo $this->maSv."-".$this->tenSv."-".$this->age();
    }
}

// $sv = new SinhVien();
// $sv->maSv="SV001";
// $sv->tenSv="Ngô Văn Đạt";
// $sv->namSinh="13/03/2004";
// $sv->getInfo();

//khai báo đối tượng
// $sv1 = new SinhVien();
// Sử dụng phương thức set trong class để thêm giá trị
// $sv1->setMaSV("PH34326");
// echo $sv1->getMaSV();

//khai báo đối tượng mới
// $sv2 = new SinhVien("PH34326","Ngô Văn Đạt","2004");
// $sv2->setMaSV("PH313131");
// $sv2->hienThiThongTin();
?>

<?php
//bài tập áp dụng
//tạo 1 class GiangVien gồm các thuộc tính:
//maGV, tenGV, namSinh, namBatDau, luongCB, soGioDay
//tạo phương thức set cho các thuộc tính sau
//khởi tạo 1 đối tượng gv và thực hiện hàm set
//tạo phương thức hienThiThongTin gồm đầy đủ các thông tin sau
//mã Giang Viên, Tên Giảng Viên, Tuổi, số năm đã đi làm
//lương cơ bản, số giờ đã dạy
class GiangVien{
    public $maGV,$tenGV,$namSinh,$namBatDau,$luongCB,$soGioDay;

    public function __construct($maGV,$tenGV,$namSinh,$namBatDau,$luongCB,$soGioDay)
    {
        $this->maGV=$maGV;
        $this->tenGV=$tenGV;
        $this->namSinh=$namSinh;
        $this->namBatDau=$namBatDau;
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;
    }
    public function setMaGV($maGv){
        $this->maGV=$maGv;
    }
    public function setTenGV($tenGv){
        $this->tenGV=$tenGv;
    }
    public function setNamSinh($namSinh){
        $this->namSinh=$namSinh;
    }
    public function setBatDau($namBatDau){
        $this->namBatDau=$namBatDau;
    }
    public function setLuongCB($luongCB){
        $this->luongCB=$luongCB;
    }
    public function setSoGioDay($soGioDay){
        $this->soGioDay=$soGioDay;
    }
    public function soNam(){
        return date('Y') - $this->namBatDau;
    }
    public function hienThiThongTin(){
        echo $this->maGV."-".$this->tenGV."-".$this->namSinh."-".$this->soNam()."-".$this->luongCB."-".$this->soGioDay;
    }
}

$gv = new GiangVien("GV001","Nguyễn Yến Phương","13/03/2003","2011","15.000.000 VNĐ","160 giờ");
$gv->setMaGV("GV10332");
$gv->hienThiThongTin();
