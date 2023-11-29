<?php
session_start();
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
require_once("../model/jobModel.php");
$companyName=$_POST['companyName'];
$jobTitle=$_POST['jobTitle'];
$jobLocation=$_POST['jobLocation'];
$salary=$_POST['salary'];
if(!isset($_POST['submit'])){
    header('location:../view/manageJobs.php?addStatus=false');
    exit();
}
$status = addJob($companyName,$jobTitle,$jobLocation,$salary);
if($status){
    header('location:../view/manageJobs.php?addSuccess=true');
}
else{
    header('location:../view/manageJobs.php?');
}
?>