<?php
include_once "nsp1.php";
include_once "nsp2.php";

use NSP111 as NSP1; // Cách đổi tên của namespace

$sv = new \NSP111\SinhVien("Nguyen Van A", 2004);
$sv->hienThiThongTin();

$sv = new \NSP222\SinhVien("Nguyen Van B", 19);
$sv->hienThiThongTin();
?>