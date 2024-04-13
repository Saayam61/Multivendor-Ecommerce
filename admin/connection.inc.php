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

?>