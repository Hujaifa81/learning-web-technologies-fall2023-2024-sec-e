<?php
include_once('../model/complaintsModel.php');
$complaintId = $_POST['complaintId'];

if (deleteComplaint($complaintId)) {
    $complaints = getAllComplaints();
    echo json_encode($complaints);
}
?>
