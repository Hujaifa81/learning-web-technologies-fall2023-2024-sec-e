<?php
session_start();
include_once('../model/userModel.php');
include_once('../controller/validation.php');
$phone=$_POST['phone'];
$newPassword=$_POST['newPassword'];
$confirmPassword=$_POST['confirmPassword'];

if(!isValidPhone($phone)){
    echo "invalid phone";
}
else if(!isValidPassword($newPassword)){
    echo "invalid password";
}
else if(!isValidConfirmPassword($newPassword,$confirmPassword)){
    echo "password mismatch";
}
else if(getUserWithPhone($phone)){
    $status=updatePassword($phone,$newPassword,$confirmPassword);
    echo "password changed";
}
else{
    echo "invalid user";
}

?>