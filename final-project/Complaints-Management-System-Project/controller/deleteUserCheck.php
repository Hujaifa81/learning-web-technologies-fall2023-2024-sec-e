<?php
include_once('../model/userModel.php');
$userId = $_POST['userId'];
if(deleteUser($userId)){
    $users = getAllUsers();
    echo json_encode($users);
}


?>