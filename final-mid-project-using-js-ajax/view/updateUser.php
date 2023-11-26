<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assest/js/updateUser.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
require_once("../model/userModel.php");
$id="";
$email="";
$userName="";
if(!isset($_GET['userId'])){
    header('location:../view/manageUsers.php?updateStatus=false');
}

else{
    $id=$_GET['userId'];
    $user=getUserWithId($id);
    if(!$user){
        header('location:../view/manageUsers.php?updateStatus=false');
        exit();
    }
    else{
        $email=$user['email'];
        $userName=$user['userName'];
    }
}

?>
<form onsubmit="validateForm()" action="../controller/manageUserCheck.php" method="POST">
    Email: <input type="email" name="updateEmail" id="email" value="<?php echo $email;?>">
    UserName: <input type="text" name="updateUserName" id="userName" value="<?php echo $userName;?>">
    ID: <input type="text" name="id" value="<?php echo $id;?>">
    <input type="submit" name="updateUserSubmit" value="Update">
</form>
<a href="manageUsers.php">Back</a>
<a href="../controller/logout.php">Logout</a>

</body>
