<?php
session_start();
require_once("../model/jobsModel.php");
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
    $jobs=getAllJobs();
}
?>
 <table border=1>
            <tr>
                <td>ID</td>
                <td>companyName</td>
                <td>jobTitle</td>
                <td>jobLocation</td>
                <td>Salary</td>
            </tr>
    <?php   for($i=0; $i<count($jobs); $i++){ ?>
            <tr>
                <td><?=$jobs[$i]['id']?></td>
                <td><?=$jobs[$i]['companyName']?></td>
                <td><?=$jobs[$i]['jobTitle']?></td>
                <td><?=$jobs[$i]['jobLocation']?></td>
                <td><?=$jobs[$i]['salary']?></td>
                <td>
                <a href="../controller/manageJobsCheck.php?jobId=<?= urlencode($jobs[$i]['id']) ?>&update=true"> Update </a> |
                <a href="../controller/manageJobsCheck.php?jobId=<?= urlencode($jobs[$i]['id']) ?>&delete=true"> DELETE </a>
                </td>
            </tr>
        <?php } ?>            
        </table>
        <a href="addJob.php?addJob=true">Add area</a>
        <?php if(isset($_GET['updateStatus'])){echo "<h3>updated successfully</h3>";}?>
        <?php if(isset($_GET['deleteStatus'])){echo "<h3>deleted successfully</h3>";}?>
        <?php if(isset($_GET['addSuccess'])){echo "<h3>Added successfully</h3>";}?>
        <a href="dashboard.php">Back</a>
        <a href="../controller/logout.php">Logout</a>
