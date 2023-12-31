<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageGeographicCoverages</title>
    <script src="../asset/js/ManageGeographicCoverages.js"></script>
    <link rel="stylesheet" href="../asset/css/ManageGeographicCoverages.css">
</head>
<body>

<?php
session_start();
require_once("../model/geographicCoveragesModel.php");
if(!isset($_SESSION['loggedIn']))
{
    header('location:signIn.php');
}
/*
$user=$_SESSION["user"];
if($user["role"]!="admin"){
    header("location:../view/dashBoard.php?userName={$user['userName']}");
    exit();
}
else{
    $areas=getAllAreas();
}*/
?>

<button onclick="ManageGeographicCoverages()">Show Areas</button>
<div id="searchText">
    <table id='table' border='1'>
        <!-- Table content goes here -->
    </table>
</div>
<div id="deleteStatus"></div>
<div>
    <a href="addArea.php">Add Area</a>
    <a href="adminDashboard.php">Back</a>
    <a href="../controller/logout.php">Logout</a> 
</div>

</body>
</html>
