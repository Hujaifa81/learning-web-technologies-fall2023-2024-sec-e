<?php
include_once("../model/complaintsModel.php");

$id = $_POST['id']; 
$status = $_POST['status'];

if ($status == "") {
    echo "invalid status";
} else {
    if (updateComplaint($id, $status)) {  // Fix the variable name here
        echo "complaint updated";
    } else {
        echo "Failed to update complaint";
    }
}
?>
