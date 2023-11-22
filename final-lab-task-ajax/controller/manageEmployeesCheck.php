<?php
session_start();
require_once('../model/userModel.php');
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
if(isset($_GET['delete'])){
$userId=$_GET['id'];
$deleteStatus=deleteUser($userId);
if($deleteStatus){
    header('location:../view/manageEmployees.php?deleteStatus=success');
}
}

if(isset($_GET['update'])){
    $userId=$_GET['id'];
header("location:../view/updateEmployee.php?userId=$userId");
}
if(isset($_POST['updateUserSubmit'])){
    $userId=$_POST['id'];
    $email=$_POST['updateEmail'];
    $userName=$_POST['updateUserName'];
    $updateStatus=updateUser($userId,$email,$userName);
    if($updateStatus){
        header('location:../view/manageEmployees.php?updateStatus=success');
    }
}
    
?>