<?php
session_start();
include_once("../controller/validation.php");
include_once("../model/userModel.php");
$email=$_POST['email'];
$password=$_POST["password"];
if((!empty($email) && isValidEmail($email)) && (!empty($password) && isValidPassword($password))){
$status=logIn($email,$password);
if($status){
    $user=getUser($email);
    $_SESSION['user']=$user;
    $_SESSION['name']=$user['name'];
    $_SESSION['phone']=$user['phone'];
    $_SESSION['email']=$user['email'];
    setcookie('loggedIn', true, time()+10000000000, '/');
    setcookie('email', $email, time()+10000000000, '/');
    
        header("location:../view/home.php?email={$user['email']}");
        exit();

}

}
else{
    header("location:../view/register.php?message=unsuccessful");
    exit(); 
}
?>