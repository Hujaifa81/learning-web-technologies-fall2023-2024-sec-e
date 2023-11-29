<?php
session_start();
require_once("../model/userModel.php");
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
    $users=getAllUsers();
}
?>
 <table border=1>
            <tr>
                <td>ID</td>
                <td>Role</td>
                <td>First Name</td>
                <td>Last name</td>
                <td>Email</td>
                <td>UserName</td>
                <td>Phone</td>
                <td>Password</td>
                <td>Gender</td>
                <td>District</td>
                <td>Address</td>
                <td>Profile</td>
                <td>Reg Date</td>
                <td>Action</td>
            </tr>
    <?php   for($i=0; $i<count($users); $i++){ ?>
            <tr>
                <td><?=$users[$i]['id']?></td>
                <td><?=$users[$i]['role']?></td>
                <td><?=$users[$i]['firstName']?></td>
                <td><?=$users[$i]['lastName']?></td>
                <td><?=$users[$i]['email']?></td>
                <td><?=$users[$i]['userName']?></td>
                <td><?=$users[$i]['phone']?></td>
                <td><?=$users[$i]['password']?></td>
                <td><?=$users[$i]['gender']?></td>
                <td><?=$users[$i]['district']?></td>
                <td><?=$users[$i]['address']?></td>
                <td><?=$users[$i]['profile']?></td>
                <td><?=$users[$i]['REG_DATE']?></td>
                <td>
                <a href="../controller/manageEmployeeCheck.php?id=<?= urlencode($users[$i]['id']) ?>&update=true"> Update </a> |
                <a href="../controller/manageEmployeeCheck.php?id=<?= urlencode($users[$i]['id']) ?>&delete=true"> DELETE </a>
                </td>
            </tr>
        <?php } ?>            
        </table>
        <a href="addEmployee.php?addEmployee=true">Add Employee</a>
        <?php if(isset($_GET['updateStatus'])){echo "<h3>updated successfully</h3>";}?>
        <?php if(isset($_GET['deleteStatus'])){echo "<h3>deleted successfully</h3>";}?>
        <a href="adminDashboard.php">Back</a>
        <a href="../controller/logout.php">Logout</a>
