<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
?>
<ul>
    <li><a href="manageEmployees.php">Manages users</a></li>
    <li><a href="searchEmployees.php">Search Employees </a></li>
    
</ul>
<a href="signIn.php">Back</a>
<a href="../controller/logout.php">Logout</a>