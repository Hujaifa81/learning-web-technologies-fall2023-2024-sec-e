<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
?>
<ul>
    <li><a href="manageJobs.php">Manages jobs</a></li>
    <li><a href="searchJobs.php">Search Jobs </a></li>
    
</ul>
<a href="signIn.php">Back</a>
<a href="../controller/logout.php">Logout</a>