<?php
require('connection.inc.php');
require('functions.inc.php');

$name = get_safe_value($con, $_POST['name']);
$email = get_safe_value($con, $_POST['email']);
$mobile = get_safe_value($con, $_POST['mobile']);
$password = get_safe_value($con, $_POST['password']);
$cpassword = get_safe_value($con, $_POST['cpassword']);

$check_user = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email = '$email'"));
if($check_user > 0){
    echo "present";
}
else{
    $added_on = date('Y-m-d H:i:s');
    mysqli_query($con, "INSERT INTO users(name, email, mobile, password, added_on) 
    VALUES('$name','$email','$mobile','$password','$added_on')");
    echo "insert";
}
?>