<?php
require('connection.inc.php');
require('functions.inc.php');
$name = get_safe_value($con, $_POST['name']);
$email = get_safe_value($con, $_POST['email']);
$mobile = get_safe_value($con, $_POST['mobile']);
$comment = get_safe_value($con, $_POST['message']);
$added_on = date('Y-m-d H:i:s');
mysqli_query($con, "INSERT INTO contacts(name, email, mobile, comment, added_on) 
VALUES('$name', '$email', '$mobile', '$comment', '$added_on')");
echo "Thank you for the feedback";
?>