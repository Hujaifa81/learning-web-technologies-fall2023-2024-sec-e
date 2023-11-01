<?php
    require_once('../model/userModel.php');

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $name=$_REQUEST['name'];
    $userType=$_REQUEST['userType'];

    if($id == "" || $password == "" || $confirmPassword=="" || $name=="" || $userType=="" ){
    
        echo "null username or password or confirmPassword or name or UserType!";
    
    }else{
        if($password!=$confirmPassword){
            echo "password and confirm password not matched";
        }
        else{
            signup();
        
        if ($status){
            $_SESSION['flag'] = 'true';
            $user=array($id,$password,$confirmPassword,$name,$userType);
            signup($user);
            header('location: ../view/login.html');
        }else{
            echo "invalid user!";
        }
        }
        
    }
?>


