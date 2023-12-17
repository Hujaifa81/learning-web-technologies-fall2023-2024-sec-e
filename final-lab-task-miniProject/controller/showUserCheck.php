<?php
include_once('../model/userModel.php');
$userId = $_POST['userId'];
$users = displayUserInformation();
echo json_encode($users);
?>