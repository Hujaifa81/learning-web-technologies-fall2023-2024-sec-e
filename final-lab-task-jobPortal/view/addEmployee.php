<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
if(!isset($_GET['addEmployee'])){
    header('location:../view/manageEmployees.php?updateStatus=false');
    exit();
}
?>
<form action="../controller/addEmployeeCheck.php" method="POST">
    Employee Name: <input type="text" name="employeeName"><br><br>
    Company Name: <input type="text" name="companyName"><br><br>
    Contact No: <input type="text" name="contactNo" ><br><br>
    User Name: <input type="text" name="userName" ><br><br>
    Password: <input type="text" name="password" ><br><br>
    <input type="submit" name="submit" value="Add">
</form>
<a href="manageEmployees.php">Back</a>
<a href="../controller/logout.php">Logout</a>