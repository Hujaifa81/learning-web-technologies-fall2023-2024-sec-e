<?php
session_start();
require_once ('validation.php');
require_once ('../model/userModel.php');
$email=$_POST['email'];
$password=$_POST["password"];
if(!isValidEmail($email) || $email===""){
    echo "invalid email";
}
else if(!isValidPassword($password)){
    echo "invalid password";
}
else{
   $status=logIn($email,$password);
   if($status){
    $user=getUser($email);
    $_SESSION['loggedIn']=true;
    $_SESSION['email']=$user['email'];
    $_SESSION['id']=$user['id'];
    $_SESSION['password']=$user['password'];
    $_SESSION['userName']=$user['userName'];
    $_SESSION['user']=$user;
    $_SESSION['role']=$user['role'];
    setcookie('loggedIn', true, time()+10000000000, '/');
    setcookie('email', $email, time()+10000000000, '/');
    if($user['role']==="admin"){
        echo "admin";
        
    }
    else{
        echo "user";
       
    }
   }
   else{
    echo "invalid user";
   }
}

?>