<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
if(!isset($_GET['addJob'])){
    header('location:../view/manageJobs.php?updateStatus=false');
    exit();
}
?>
<form action="../controller/addJobCheck.php" method="POST">
    Company Name: <input type="text" name="companyName"><br><br>
    Job Title: <input type="text" name="jobTitle"><br><br>
    Job Location: <input type="text" name="jobLocation" ><br><br>
    Salary: <input type="text" name="salary" ><br><br>
    <input type="submit" name="submit" value="Add">
</form>
<a href="manageJobs.php">Back</a>
<a href="../controller/logout.php">Logout</a>