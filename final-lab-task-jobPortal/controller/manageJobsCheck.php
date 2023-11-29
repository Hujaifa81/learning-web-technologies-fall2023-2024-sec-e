<?php
session_start();
require_once('../model/jobModel.php');
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
if(isset($_GET['delete'])){
$jobId=$_GET['jobId'];
$deleteStatus=deleteJob($jobId);
if($deleteStatus){
    header('location:../view/manageJobs.php?deleteStatus=success');
}
}

if(isset($_GET['update'])){
    $jobId=$_GET['jobId'];
header("location:../view/updateJob.php?jobId=$jobId");
}
if(isset($_POST['updateJobSubmit'])){
    $jobId=$_POST['id'];
    $companyName=$_POST['updateCompanyName'];
    $jobTitle=$_POST['updateJobTitle'];
    $jobLocation=$_POST['updateJobLocation'];
    $salary=$_POST['updateSalary'];
    
    $updateStatus=updateJob($jobId,$companyName,$jobTitle,$jobLocation,$salary);
    if($updateStatus){
        header('location:../view/manageJobs.php?updateStatus=success');
    }
}
    
?>