<?php

require_once "models/Account.php";

class AccountController extends Account {
    public function login() {
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $account = new Account();
            $loginResult = $account->checkuser($user, $pass);

            if ($loginResult) {
                $_SESSION['logged_in'] = true;
                $_SESSION['role'] = $loginResult['role'];
                echo '<script>alert("Đăng nhập thành công");</script>'; 
                echo '<script>window.location.href = "index.php";</script>';
            } else {
                echo '<script>alert("Tài khoản không tồn tại");<script>';
            }
        }
        
    }

    public function register() {     
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
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
        }
        
    }

    public function exit() {
        echo '<script>alert("Đã Thoát");</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }

}