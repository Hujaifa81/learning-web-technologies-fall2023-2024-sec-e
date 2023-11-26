<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assest/js/addArea.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
if(!isset($_GET['addArea'])){
    header('location:../view/manageGeographicCoverages.php?updateStatus=false');
    exit();
}
?>
<form onsubmit="validateForm()" action="../controller/addAreaCheck.php" method="POST">
    Area: <input type="text" name="area" id="area"><br><br>
    Helpline: <input type="text" name="helpline" id="helpline"><br><br>
    Status: <input type="text" name="status" id="status" ><br><br>
    <input type="submit" name="submit" value="Add">
</form>
<a href="manageGeographicCoverages.php">Back</a>
<a href="../controller/logout.php">Logout</a>

</body>