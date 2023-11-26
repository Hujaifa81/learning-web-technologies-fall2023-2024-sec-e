<?php
session_start();
require_once("../model/geographicCoveragesModel.php");
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
    $areas=getAllAreas();
}
?>
 <table border=1>
            <tr>
                <td>ID</td>
                <td>Area</td>
                <td>Helpline</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
    <?php   for($i=0; $i<count($areas); $i++){ ?>
            <tr>
                <td><?=$areas[$i]['id']?></td>
                <td><?=$areas[$i]['area']?></td>
                <td><?=$areas[$i]['helpline']?></td>
                <td><?=$areas[$i]['status']?></td>
                <td>
                <a href="../controller/manageGeographicCoveragesCheck.php?areaId=<?= urlencode($areas[$i]['id']) ?>&update=true"> Update </a> |
                <a href="../controller/manageGeographicCoveragesCheck.php?areaId=<?= urlencode($areas[$i]['id']) ?>&delete=true"> DELETE </a>
                </td>
            </tr>
        <?php } ?>            
        </table>
        <a href="addArea.php?addArea=true">Add area</a>
        
        <?php if(isset($_GET['deleteStatus'])){echo "<h3>deleted successfully</h3>";}?>
        <?php if(isset($_GET['addSuccess'])){echo "<h3>Added successfully</h3>";}?>
        <a href="adminDashboard.php">Back</a>
        <a href="../controller/logout.php">Logout</a>
