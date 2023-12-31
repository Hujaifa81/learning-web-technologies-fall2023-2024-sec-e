<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
$userName=$_SESSION['userName'];
?>
<head>

<link rel="stylesheet" href="../asset/css/userDashboard.css">

</head>
<h3><?php echo "Welcome ". $userName?></h3>
<ul>
<li><a href="complaintDashboard.php?userName=<?= urlencode($userName) ?>">Complaint Dashboard</a></li>
<li><a href="viewProfile.php?userName=<?= urlencode($userName) ?>">View Profile</a></li>
<li><a href="registerComplaint.php?userName=<?= urlencode($userName) ?>">Register Complaint</a></li>
<li><a href="complaintStatus.php?userName=<?= urlencode($userName) ?>">Complaint status</a></li>
<li><a href="coverageAvailable.php">Coverage Available</a></li>

</ul>
<button><a href="../controller/logout.php">Logout</a> </button>