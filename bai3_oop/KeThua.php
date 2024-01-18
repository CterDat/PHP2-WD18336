<?php
// class ConNguoi{
//     //khai báo các thuộc tính
//     //đồng nghĩa là khai báo biến
//     public $tay, $chan, $mat, $mui;

//     //khai báo phương thức
//     //đồng nghĩa là khai báo hàm
//     public function an(){
//         echo "Ăn bằng miệng";
//     }

//     public function setTay($tay){
//         $this->tay = $tay;
//     }

//     public function setChan($chan){
//         $this->chan = $cha;
//     }

    
// }

// //đối với các class con có thể chứa các thuộc tính và phương thức riêng tự khai báo

// class NguoiLon extends ConNguoi{
//     public $rau, $longNach;

//     public function di(){
//         echo "Người lớn thì đi bằng ".$this->chan." Chân<br>";
//     }


// }

// class TreCon extends ConNguoi{
//     public function bo(){
//         echo "Trẻ Con thì bò bằng ".$this->tay." Tay & ".$this->chan." Chân";
//     }
// }

// //Khởi tạo đối tượng
// //đối tượng người lớn đi bằng 2 chân và hiển thị ra web

// $nl = new NguoiLon();
// $nl->setChan(2);
// $nl->di();

// //Khởi tạo đối tượng
// //trẻ con bò bằng 2 tay và 2 chân
// $tc = new TreCon();
// $tc->setChan(2);
// $tc->setTay(2);
// $tc->bo();

////Khởi tạo class cha ConNguoi
////Thuộc tính họ tên, địa chỉ, năm sinh
////Khai báo phương thức tính tuổi
////Lớp con HocSinh
////Thuộc tính điểm toán, lý ,hóa
class ConNguoi{
    public $hoTen, $namSinh, $diaChi;

    public function __construct($hoTen,$namSinh,$diaChi) {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;

    }

    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }

    public function hienThiThongTin(){
        echo $this->hoTen." - ".$this->tinhTuoi()." - ".$this->diaChi;
    }
}

class HocSinh extends ConNguoi{
    public $diemToan, $diemLy, $diemHoa;

    public function __construct($hoTen,$namSinh,$diaChi,$diemToan,$diemLy,$diemHoa) {
        parent::__construct($hoTen,$namSinh,$diaChi);
        $this->diemToan=$diemToan;
        $this->diemLy=$diemLy;
        $this->diemHoa=$diemHoa;
    }

    public function tinhDiem(){
        return ($this->diemToan + $this->diemLy + $this->diemHoa)/3;
    }

    public function hienThiThongTinSV(){
        echo $this->hienThiThongTin()." - ".$this->tinhDiem();
    }
}

$hs = new HocSinh("Ngô Văn Đạt","2004","HN",9,9,9);
$hs->hienThiThongTinSV();



?>