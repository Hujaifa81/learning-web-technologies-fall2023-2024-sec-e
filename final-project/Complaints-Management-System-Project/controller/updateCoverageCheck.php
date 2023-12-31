
<?php
include_once("../model/geographicCoveragesModel.php");

$id = $_POST['id']; 
$helpline = $_POST['helpline'];
$status = $_POST['status'];

if ($helpline == "") {
    echo "invalid helpline";
} else if ($status == "") {
    echo "invalid status";
} else {
    if (updateArea($id, $helpline, $status)) {
        echo "Area updated";
    } else {
        echo "Failed to update area";
    }
}
?>
