<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
if(!isset($_GET['addJob'])){
    header('location:../view/manageGeographicCoverages.php?updateStatus=false');
    exit();
}
?>
<form action="../controller/addAreaCheck.php" method="POST">
    Area: <input type="text" name="area"><br><br>
    Helpline: <input type="text" name="helpline"><br><br>
    Status: <input type="text" name="status" ><br><br>
    <input type="submit" name="submit" value="Add">
</form>
<a href="manageGeographicCoverages.php">Back</a>
<a href="../controller/logout.php">Logout</a>