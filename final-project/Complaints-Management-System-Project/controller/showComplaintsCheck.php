<?php
include_once('../model/complaintsModel.php');
$complaintId = $_POST['complaintId'];
$complaints = getAllComplaints();
echo json_encode($complaints);
?>