<?php
include_once("../model/userModel.php");
include_once("../controller/validation.php");
$email=$_POST['email'];
$password=$_POST['password'];
if(!isValidEmail($email)){
    echo "email is invalid";
}
else if(isValidEmail($email)){
    $status=logIn($email,$password);
    if($status){
        echo "valid user";
    }
    else{
        echo "invalid user";
    }
}


?>