<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Complaints</title>
    <script src="../asset/js/manageComplaints.js"></script>
    <link rel="stylesheet" href="../asset/css/manageComplaints.css">

</head>
<body>

<?php
session_start();
require_once("../model/complaintsModel.php");
if(!isset($_SESSION['loggedIn']))
{
    header('location:signIn.php');
}

/*$user=$_SESSION["user"];
if($user["role"]!="admin"){
    header("location:../view/dashBoard.php?userName={$user['userName']}");
    exit();
}
else{
    $complaints=getAllComplaints();
}
*/

?>
<div>
<button onclick="manageComplaints()" id="btnDetails">Show complaints</button> <br><br>
        <div id="searchText">
        <table id='table' border='1'>
</div>
       
           
        </table>
    </div>
    <div id="deleteStatus">

    </div>

        <a href="addComplaint.php">Add Complaints</a>
        <a href="adminDashboard.php">Back</a>
        <a href="../controller/logout.php">Logout</a>
    
</body>
</html>        