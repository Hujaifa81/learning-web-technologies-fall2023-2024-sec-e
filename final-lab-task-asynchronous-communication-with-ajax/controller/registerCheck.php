<?php
require_once ('./validation.php');
require_once ('../model/userModel.php');
if(!isset($_POST['register'])){header('location: ../view/register.php');};

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST["password"];
$confirmPassword=$_POST['confirmPassword'];

if((!empty($name) && isValidName($name)) && (!empty($email) && isValidEmail($email)) && (!empty($phone) && isValidPhone($phone)) && (!empty($password) && isValidPassword($password)) && (!empty($confirmPassword) && isValidConfirmPassword($password,$confirmPassword))){
    $status = addUser($name,$email,$phone,$password,$confirmPassword);
    if($status){
        header('location: ../view/logIn.php?success=created');
    }
    
}
else{
    header('location: ../view/register.php?unknown=true');
}

?>