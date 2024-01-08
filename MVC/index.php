<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url']: "/";

switch ($url) {
    case '/':
        listProduct();
        break;
    case 'addpr':
        addPr();
        break; 
    case 'updatepr':
    updatePr();
    break;
    case 'deletepr':
    deletePr();
    break;

    default:
        # code...
        break;
}