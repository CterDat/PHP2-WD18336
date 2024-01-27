<?php

// abstract là bản chất thiết kế có sẵn có chung các hành động và bản chất
// 1 class được gọi là class trừu tượng khi nó có phương thức trừu tượng
// class trừu tượng thì không thể khởi tạo
// nhưng vẫn có phương thức và thuộc tính như class bình thường

abstract class DongVat{
    //class trừu tượng

    abstract public function di();
    //phương thức trừu tượng
    abstract public function noi();
    
}
class ConNguoi extends DongVat{
    public function di(){
        echo "Đi băng 2 chân</br>";
    }
    public function noi(){
        echo "Nói băng miệng</br>";
    }
}
class ConCho extends DongVat{
    public function di(){
        echo "Đi bằng 4 chấn</br>";
    }
    public function noi(){
        echo "Sủa Go Go</br>";
    }
}
$cn = new ConCho();
$cn->noi();
$cn->di();


//------------------------------------------------------------------------//
abstract class HinhHoc{
    abstract public function dienTich();
    abstract public function chuVi();
}
class HCN extends HinhHoc{
    public $chieuDai,$chieuRong;
    public function setChieuDai($chieuDai){
        $this->chieuDai=$chieuDai;
    }
    public function setChieuRong($chieuRong){
        $this->chieuRong=$chieuRong;
    }
    public function dienTich(){
        return $this->chieuDai * $this->chieuRong;
    }
    public function chuVi(){
        return ($this->chieuDai + $this->chieuRong)*2;
    }
    public function hienThi(){
        echo "Diện tích HCN là: ".$this->dienTich(). " - Chu vi HCN là: ".$this->chuVi(). "</br>";
    }
}
class HV extends HinhHoc{
    public $canh;
    public function setCanh($canh){
        $this->canh=$canh;
    }
    public function dienTich(){
        return $this->canh * $this->canh;
    }
    public function chuVi(){
        return $this->canh*4;
    }
    public function hienThi(){
        echo "Diện tích HV là: ".$this->dienTich(). " - Chu vi HV là: ".$this->chuVi(). "</br>";
    }
}
class HinhTron extends HinhHoc{
    public $r;
    public $pi = M_PI;
    public function setR($r){
        $this->r=$r;
    }
    
    public function dienTich(){
        return $this->pi*$this->r**2;
    }
    public function chuVi(){
        return 2*$this->r*$this->pi;
    }
    public function hienThi(){
        echo "Diện tích HT là: ".$this->dienTich(). " - Chu vi HT là: ".$this->chuVi(). "</br>";
    }
}
$hcn = new HCN();
$hcn->setChieuDai(5);
$hcn->setChieuRong(4);
$hcn->hienThi();
$hv = new HV();
$hv->setCanh(2);
$hv->hienThi();
$ht = new HinhTron();
$ht->setR(2);
$ht->hienThi();

