<?php
session_start();
require_once('../model/geographicCoveragesModel.php');
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
if(isset($_GET['delete'])){
$areaId=$_GET['areaId'];
$deleteStatus=deleteArea($areaId);
if($deleteStatus){
    header('location:../view/manageGeographicCoverages.php?deleteStatus=success');
}
}

if(isset($_GET['update'])){
    $areaId=$_GET['areaId'];
header("location:../view/updateArea.php?areaId=$areaId");
}
if(isset($_POST['updateAreaSubmit'])){
    $areaId=$_POST['id'];
    $helpline=$_POST['updateHelpline'];
    $status=$_POST['updateStatus'];
    
    $updateStatus=updateArea($areaId,$helpline,$status);
    if($updateStatus){
       header('location:../view/manageGeographicCoverages.php?updateStatus=success');
    }
}
    
?>

