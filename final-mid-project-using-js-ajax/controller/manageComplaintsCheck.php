<?php
session_start();
require_once('../model/complaintsModel.php');
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
if(isset($_GET['delete'])){
$complaintId=$_GET['complaintId'];
$deleteStatus=deleteComplaint($complaintId);
if($deleteStatus){
    header('location:../view/manageComplaints.php?deleteStatus=success');
}
}

if(isset($_GET['update'])){
    $complaintId=$_GET['complaintId'];
header("location:../view/updateComplaint.php?complaintId=$complaintId");
}
if(isset($_POST['updateComplaintSubmit'])){
    $complaintId=$_POST['id'];
    $status=$_POST['updateStatus'];
    if(empty($status)){
        header("location:../view/updateComplaint.php");
    }
    else{
        $updateStatus=updateComplaint($complaintId,$status);
        if($updateStatus){
            header('location:../view/manageComplaints.php?updateStatus=success');
        }
    }
    
}
    
?>