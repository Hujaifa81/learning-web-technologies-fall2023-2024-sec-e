<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assest/js/updateComplaint.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}

require_once("../model/complaintsModel.php");
$id="";
$status="";

if(!isset($_GET['complaintId'])){
    header('location:../view/manageComplaints.php?updateStatus=false');
}

else{
    $id=$_GET['complaintId'];
    $complaint=getComplaintWithId($id);
    if(!$complaint){
        header('location:../view/manageComplaints.php?updateStatus=false');
        exit();
    }
    else{
        $status=$complaint['status'];
        
    }
}

?>
<form onsubmit="validateForm()" action="../controller/manageComplaintsCheck.php" method="POST">
    Status: <input type="text" name="updateStatus" id="status" value="<?php echo $status;?>">
    Complaint id: <input type="text" name="id" value="<?php echo $id;?>">
    <input type="submit" name="updateComplaintSubmit" value="Update">
</form>
<a href="manageComplaints.php">Back</a>
<a href="../controller/logout.php">Logout</a>

</body>