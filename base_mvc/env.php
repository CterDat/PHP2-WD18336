<?php

const DBNAME = "base_mvc";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/PHP2-WD18336/base_mvc/";

function route($url){
    return BASE_URL.$url;
}

function flash($key, $msg, $route) {
    $_SESSION[$key] = $msg;
    switch ($key){
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);
    die;
}