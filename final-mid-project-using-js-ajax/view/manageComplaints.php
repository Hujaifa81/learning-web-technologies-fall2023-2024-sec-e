<?php
session_start();
require_once("../model/complaintsModel.php");
if(!isset($_SESSION['loggedIn']))
{
    header('location:signIn.php');
}
$user=$_SESSION["user"];
if($user["role"]!="admin"){
    header("location:../view/dashBoard.php?userName={$user['userName']}");
    exit();
}
else{
    $complaints=getAllComplaints();
}
?>
<table border=1>
            <tr>
                <td>ComplaintId</td>
                <td>UserId</td>
                <td>Category</td>
                <td>Sub Category</td>
                <td>Status</td>
                <td>Complaint Details</td>
                <td>Action</td>
                
            </tr>
    <?php   for($i=0; $i<count($complaints); $i++){ ?>
            <tr>
                <td><?=$complaints[$i]['complaintId']?></td>
                <td><?=$complaints[$i]['userId']?></td>
                <td><?=$complaints[$i]['category']?></td>
                <td><?=$complaints[$i]['subCategory']?></td>
                <td><?=$complaints[$i]['status']?></td>
                <td><?=$complaints[$i]['complaintDetails']?></td>
                
                <td>
                <a href="../controller/manageComplaintsCheck.php?complaintId=<?= urlencode($complaints[$i]['complaintId']) ?>&update=true"> Update </a> |
                <a href="../controller/manageComplaintsCheck.php?complaintId=<?= urlencode($complaints[$i]['complaintId']) ?>&delete=true"> DELETE </a>
                </td>
            </tr>
        <?php } ?>            
        </table>
        
        
        <?php if(isset($_GET['deleteStatus'])){echo "<h3>deleted successfully</h3>";}?>
        <a href="adminDashboard.php">Back</a>
        <a href="../controller/logout.php">Logout</a>