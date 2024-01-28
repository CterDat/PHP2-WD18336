<?php

require_once "models/Account.php";

class AccountController extends Account {
    public function login() {
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkuser = $this->checkuser($user, $pass); // Gọi phương thức checkuser() từ lớp cha
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                $_SESSION['pass'] = $checkuser;
                header('Location: index.php');
                exit;
            } else {
                $thongbao = "Tài khoản không tồn tại!";
            }
        }
        include "view/taikhoan/login.php";
    }

    public function signIn() {
        if (isset($_POST['dangky']) && ($_POST['dangky'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $this->insert_taikhoan($email, $user, $pass, $address, $tel); // Gọi phương thức insert_taikhoan() từ lớp cha
            $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập.";
            header('Location: index.php?act=dangnhap');
            exit;
        }
        include "view/taikhoan/register.php";
    }
}