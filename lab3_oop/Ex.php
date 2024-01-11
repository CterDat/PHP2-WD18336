<?php
//Bai1
echo "-------------------------Bài 1-------------------------<br>";
class Animal{
    public $chan, $mat, $mui;

    public function an(){
        echo "Động vật ăn bằng mồm =))<br>";
    }

    
    public function setChan($chan){
        $this->chan=$chan;
    }
    public function setMat($mat){
        $this->mat=$mat;
    }
    public function setMui($mui){
        $this->mui=$mui;
    }
}
class Dog extends Animal{
    public $sua;

    public function setSua($sua){
        $this->sua=$sua;
    }

    public function tapTinh(){
        echo "Con chó đi bằng ".$this->chan." & Sủa ".$this->sua."<br>";
    }
}
class Cat extends Animal{
    public $keu;

    public function setKeu($keu){
        $this->keu=$keu;
    }

    public function tapTinh(){
        echo "Con mèo đi bằng ".$this->chan." & Kêu ".$this->keu."<br>";
    }
}
class Bird extends Animal{
    public $canh;

    public function setCanh($canh){
        $this->canh=$canh;
    }

    public function tapTinh(){
        echo "Con chim đi bằng ".$this->chan." Chân & Bay bằng ".$this->canh." Cánh<br>";
    }
}
//Animal
$a = new Animal();
$a->an();
//Dog
$d = new Dog();
$d->setChan(4);
$d->setSua("Gâu Gâu");
$d->tapTinh();
//Cat
$c = new Cat();
$c->setChan(4);
$c->setKeu("Meo Meo");
$c->tapTinh();
//Chim
$cm = new Bird();
$cm->setChan(2);
$cm->setCanh(2);
$cm->tapTinh();


//Bai2
echo "-------------------------Bài 2-------------------------<br>";
class Person{
    public $ten, $tuoi;

    public function setTen($ten){
        $this->ten=$ten;
    }
    public function setTuoi($tuoi){
        $this->tuoi=$tuoi;
    }

    public function thongTinKhach(){
        echo "Họ và Tên: ".$this->ten." & Tuổi: ".$this->tuoi."<br><br>";
    }
}
class Employee extends Person{
    public $maNhanVien, $luongCB;

    public function setMaNhanVien($ma){
        $this->maNhanVien=$ma;
    }

    public function setLuongCB($luongCB){
        $this->luongCB=$luongCB;
    }

    public function thongTinNhanVien(){
        echo "Mã Nhân Viên: ".$this->maNhanVien." & Lương cơ bản: ".$this->luongCB."<br>";
    }
    public function lamViec(){
        echo $this->ten." đang làm việc <br><br>";
    }
}
class Manager extends Employee{
    public $soNhanVienQuanLy;

    public function setSoNhanVienQuanLy($sonv){
        $this->soNhanVienQuanLy=$sonv;
    }

    public function thongTinQuanLy(){
        echo "Số Nhân Viên Quản Lý: ".$this->soNhanVienQuanLy."<br>";
    }

    public function nhanVienQuanLy(){
        echo $this->ten." Đang quản lý: ".$this->soNhanVienQuanLy."<br>";
    }
}

//Person
$person = new Person();
$person->setTen("Ngô Văn Đạt");
$person->setTuoi(20);
$person->thongTinKhach();
//Employee
$employee = new Employee();
$employee->setTen("Ngô Văn Đạt");
$employee->setMaNhanVien("PH34326");
$employee->setLuongCB("15.000.000");
$employee->thongTinNhanVien();
$employee->lamViec();
//Manager
$manager = new Manager();
$manager->setTen("Ngô Văn Đạt");
$manager->setSoNhanVienQuanLy(10);
$manager->thongTinQuanLy();
$manager->nhanVienQuanLy();

//bai3
echo "-------------------------Bài 3-------------------------<br>";
class Shape{
    public function calculateArea(){
        echo "Phương thức calculateArea() của lớp cha Shape. <br>";
    }
}
class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        $area = $this->side * $this->side;
        echo "Diện tích hình vuông: $area <br>";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        $area = M_PI * $this->radius * $this->radius;
        echo "Diện tích hình tròn: $area <br>";
    }
}

$shape = new Shape();
$shape->calculateArea();

$square = new Square(4);
$square->calculateArea();

$circle = new Circle(5);
$circle->calculateArea();