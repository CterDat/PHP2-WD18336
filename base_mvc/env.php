<?php

const DBNAME = "demo_mvc";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "localhost/PHP2-WD18336/base_mvc/";

function route($url){
    return BASE_URL.$url;
}