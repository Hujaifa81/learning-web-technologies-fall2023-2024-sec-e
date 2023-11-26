<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assest/js/updateArea.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
require_once("../model/geographicCoveragesModel.php");
$id="";
$status="";
$helpline="";

if(!isset($_GET['areaId'])){
    header('location:../view/manageGeographicCoverages.php?updateStatus=false');
}

else{
    $id=$_GET['areaId'];
    $area=getAreaWithId($id);
    if(!$area){
        header('location:../view/manageGeographicCoverages.php?updateStatus=false');
        exit();
    }
    else{
        $status=$area['status'];
        $helpline=$area['helpline'];
    }
}

?>
<form onsubmit="validateForm()" action="../controller/manageGeographicCoveragesCheck.php" method="POST">
    Status: <input type="text" name="updateStatus" id="status" value="<?php echo $status;?>">
    Helpline: <input type="text" name="updateHelpline" id="helpline" value="<?php echo $helpline;?>">
    Area id: <input type="text" name="id" value="<?php echo $id;?>">
    <input type="submit" name="updateAreaSubmit" value="Update">
</form>
<a href="manageGeographicCoverages.php">Back</a>
<a href="../controller/logout.php">Logout</a>

</body>