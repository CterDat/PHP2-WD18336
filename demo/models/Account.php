<?php

class Account extends db{
    function insert_taikhoan($email,$user,$pass,$address,$tel){
        $sql = "insert into taikhoan(email,user,pass,address,tel) values('$email','$user','$pass','$address','$tel')";
        return $this->getData($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        return $this->getData($sql, false);            
    }

    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."'";
        return $this->getData($sql, false);
    }
}