<?php
include_once('../model/complaintsModel.php');
$userId=$_POST['userId'];
$complaints = getAllUserComplaints($userId);
echo json_encode($complaints);
?>