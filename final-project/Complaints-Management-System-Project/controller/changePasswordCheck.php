<?php
session_start();
include_once('../model/userModel.php');
include_once('validation.php');
$userId=$_SESSION['id'];
$oldPassword=$_POST['oldPassword'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];

if(!isValidPassword($oldPassword)){
    echo "old password invalid";
}
else{
    if(!isValidPassword($password)){
        echo "new password invalid";
    }
    else{
        if(!isValidConfirmPassword($password,$confirmPassword)){
            echo "password mismatch";
        }
        else{
            $findStatus=getUserWithIdPassword($userId,$oldPassword);
            if($findStatus){
                updatePasswordWithId($userId,$password);
                echo "password changed";
            }
            else{
                echo "wrong old password";
            }
        }
    }
}
?>