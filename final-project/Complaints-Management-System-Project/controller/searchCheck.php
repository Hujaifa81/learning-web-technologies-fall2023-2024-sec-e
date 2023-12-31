<?php
include_once('../model/complaintsModel.php');
$category = $_POST['search'];
$complaints = getSearchComplaintsByCategory($category);
echo json_encode($complaints);
?>