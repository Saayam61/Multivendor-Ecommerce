<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "ecom";

$con = mysqli_connect($servername, $username, $password, $database);
if($con){
    // echo "Database Connection Success";
}
else{
    mysqli_connect_error($con);
}

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'].'/Multivendor-Ecommerce/');
define('SITE_PATH', 'http://localhost/Multivendor-Ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH.'media/products/');

define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH.'media/products/');

?>