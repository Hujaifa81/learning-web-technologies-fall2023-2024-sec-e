<?php
session_start();
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
require_once("../model/employeeModel.php");
$employeeName=$_POST['employeeName'];
$companyName=$_POST['companyName'];
$contactNo=$_POST['contactNo'];
$userName=$_POST['userName'];
$password=$_POST['password'];
if(!isset($_POST['submit'])){
    header('location:../view/manageEmployees.php?addStatus=false');
    exit();
}
$status = addUser($employeeName,$companyName,$contactNo,$userName,$password);
if($status){
    header('location:../view/manageEmployees.php?addSuccess=true');
}
else{
    header('location:../view/manageEmployees.php?');
}
?>