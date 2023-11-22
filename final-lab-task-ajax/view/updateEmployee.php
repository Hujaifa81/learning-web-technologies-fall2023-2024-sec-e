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
    header('location:../view/manageEmployees.php?updateStatus=false');
}

else{
    $id=$_GET['userId'];
    $user=getUserWithId($id);
    if(!$user){
        header('location:../view/manageEmployees.php?updateStatus=false');
        exit();
    }
    else{
        $email=$user['email'];
        $userName=$user['userName'];
    }
}

?>
<form action="../controller/manageUserCheck.php" method="POST">
    Email: <input type="email" name="updateEmail" value="<?php echo $email;?>">
    UserName: <input type="text" name="updateUserName" value="<?php echo $userName;?>">
    ID: <input type="text" name="id" value="<?php echo $id;?>">
    <input type="submit" name="updateUserSubmit" value="Update">
</form>
<a href="manageEmployees.php">Back</a>
<a href="../controller/logout.php">Logout</a>