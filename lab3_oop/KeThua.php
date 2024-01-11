<?php
class ConNguoi{
    //khai báo các thuộc tính
    //đồng nghĩa là khai báo biến
    public $tay, $chan, $mat, $mui;

    //khai báo phương thức
    //đồng nghĩa là khai báo hàm
    public function an(){
        echo "Ăn bằng miệng";
    }

    public function setTay($tay){
        $this->tay = $tay;
    }

    public function setChan($chan){
        $this->chan = $chan;
    }

    
}

//đối với các class con có thể chứa các thuộc tính và phương thức riêng tự khai báo

class NguoiLon extends ConNguoi{
    public $rau, $longNach;

    public function di(){
        echo "Người lớn thì đi bằng ".$this->chan." Chân<br>";
    }


}

class TreCon extends ConNguoi{
    public function bo(){
        echo "Trẻ Con thì bò bằng ".$this->tay." Tay & ".$this->chan." Chân";
    }
}

//Khởi tạo đối tượng
//đối tượng người lớn đi bằng 2 chân và hiển thị ra web

$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();

//Khởi tạo đối tượng
//trẻ con bò bằng 2 tay và 2 chân
$tc = new TreCon();
$tc->setChan(2);
$tc->setTay(2);
$tc->bo();