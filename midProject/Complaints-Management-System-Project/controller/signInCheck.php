<?php
session_Start();
require_once ('validation.php');
require_once ('../model/userModel.php');
$email=$_POST['email'];
$password=$_POST["password"];

if(!isset($_POST['signIn'])) {header('location: ../view/signIn.php');}
if(empty($email)) {
    header("location: ../view/signIn.php?errorMsgEmail=Field is empty&email={$email}&submit=true"); 
    exit();
}
else{
    if(!isValidEmail($email)){
        header("location: ../view/signIn.php?errorMsg=invalidEmail&email={$email}&submit=true"); 
        exit();
    }
}
if(empty($password)) {
    header("location: ../view/signIn.php?errorMsgPassword=Field is empty&firstName={$firstName}&lastName={$lastName}&userName={$userName}&email={$email}&phone={$phone}&submit=true"); 
    exit();
}
else{
    if(!isValidPassword($password)){
        header("location: ../view/signIn.php?errorMsg=invalidPassword&firstName={$firstName}&lastName={$lastName}&userName={$userName}&email={$email}&phone={$phone}&submit=true"); 
        exit();
    }
}
if(logIn($email,$password)){
    $user=getUser($email);
    $_SESSION['loggedIn']=true;
    $_SESSION['email']=$user['email'];
    $_SESSION['user']=$user;
    $_SESSION['role']=$user['role'];
    setcookie('loggedIn', true, time()+10000000000, '/');
    setcookie('email', $email, time()+10000000000, '/');
    if( $_SESSION['role']==='admin'){
        header("location:../view/adminDashboard.php?userName={$user['userName']}");
        exit();
    }
    
    else{
        header("location: ../view/dashBoard.php?userName={$user['userName']}");
        exit();
    }
    
    
}
else{
    header("location: ../view/signIn.php?errorMsg=invalidUser");
}
?>