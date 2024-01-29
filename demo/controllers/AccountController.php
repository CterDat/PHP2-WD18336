<?php

require_once "models/Account.php";

class AccountController extends Account {
    public function login() {
        
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkuser = $this->checkuser($user, $pass); // Gọi phương thức checkuser() từ lớp cha
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                $_SESSION['pass'] = $checkuser;
                echo '<script>alert("Đăng kí thành công");</script>';
                echo '<script>window.location.href = "index.php";</script>';
            } else {
                $thongbao = "Tài khoản không tồn tại!";
            }
        
    }

    public function signIn() {       
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $account = new Account();
            $check = $account->insert_taikhoan($email, $user, $pass, $address, $tel); // Gọi phương thức insert_taikhoan() từ lớp cha
            if (!$check) {
                echo '<script>alert("Đăng kí thành công");</script>';
                echo '<script>window.location.href = "index.php?url=login";</script>';
            } else {
                echo '<script>alert("Không Đăng kí được");</script>';
            }
            exit;    
    }
}