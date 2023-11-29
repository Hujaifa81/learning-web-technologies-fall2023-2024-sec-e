<?php
session_start();
require_once ('./validation.php');
require_once ('../model/userModel.php');
if(!isset($_POST['forgetPasswordSubmit'])){
    header('location:../view/signIn.php');
    exit();
}
$phone=$_POST['phone'];
$newPassword=$_POST['newPassword'];
$confirmPassword=$_POST['confirmPassword'];

if(empty($phone)) {
    header("location: ../view/forgetPassword.php?errorMsgPhone=Field is empty&phone={$phone}&submit=true"); 
    exit();
}
else{
    if(!isValidPhone($phone)){
        header("location: ../view/forgetPassword.php?errorMsg=invalidPhone&phone={$phone}&submit=true"); 
        exit();
    }
}
if(empty($newPassword)) {
    header("location: ../view/forgetPassword.php?errorMsgNewPassword=Field is empty&phone={$phone}&submit=true"); 
    exit();
}
else{
    if(!isValidPassword($newPassword)){
        header("location: ../view/forgetPassword.php?errorMsg=invalidPassword&phone={$phone}&submit=true"); 
        exit();
    }
}
if(empty($confirmPassword)) {
    header("location: ../view/forgetPassword.php?errorMsgConfirmPassword=Field is empty&phone={$phone}&submit=true"); 
    exit();
}
else{
    if(!isValidConfirmPassword($newPassword,$confirmPassword)){
        header("location: ../view/forgetPassword.php?errorMsg=invalidConfirmPassword&phone={$phone}&submit=true"); 
        exit();
    }
}
$status=getUserWithPhone($phone);
if($status){
    $updatePasswordStatus=updatePassword($phone,$newPassword,$confirmPassword);
    if($updatePasswordStatus){
        header("location: ../view/signIn.php?passwordChanged=successful");
    }
}
else{
    header("location: ../view/forgetPassword.php?passwordNotChanged=true");
}
?>