<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
$userName=$_SESSION['userName'];
?>
 <head>
 <link rel="stylesheet" href="../asset/css/adminDashboard.css">
 
 </head>
 <body>
 <div class="dashboard-container">
    <?php echo "<h1>Welcome {$userName}</h1>"?>

    <ul class="dashboard-menu">
        <li><a href="viewProfile.php?userName=<?= urlencode($userName) ?>">View Profile</a></li>
        <li><a href="manageUsers.php">Manage Users</a></li>
        <li><a href="manageComplaints.php">Manage Complaints</a></li>
        <li><a href="manageGeographicCoverages.php">Geographic Coverage</a></li>
        <li><a href="searchComplaints.php">Search Complaints by Category</a></li>
    </ul>

   
    <a class="dashboard-btn logout-btn" href="../controller/logout.php">Logout</a>
</div>
 </body>

