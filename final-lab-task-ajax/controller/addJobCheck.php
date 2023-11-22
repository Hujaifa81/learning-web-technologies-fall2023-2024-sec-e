<?php
session_start();
if(!isset($_SESSION['loggedIn'])) {header('location: ../view/signIn.php');}
require_once("../model/geographicCoveragesModel.php");
$area=$_POST['area'];
$helpline=$_POST['helpline'];
$status=$_POST['status'];
if(!isset($_POST['submit'])){
    header('location:../view/manageGeographicCoverages.php?addStatus=false');
    exit();
}
$status = addArea($area,$helpline,$status);
if($status){
    header('location:../view/manageGeographicCoverages.php?addSuccess=true');
}
else{
    header('location:../view/manageGeographicCoverages.php?');
}
?>