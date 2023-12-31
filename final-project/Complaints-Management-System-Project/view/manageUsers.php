<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage users</title>
    <script src="../asset/js/manageUsers.js"></script>
    <link rel="stylesheet" href="../asset/css/manageUsers.css">
</head>
<body>
<?php
session_start();
?>

<button onclick="manageUsers()">Show users</button>
<div id="searchText">
    <table id='table' border='1'>
        <!-- Table content goes here -->
    
</div>
</table>
<div id="deleteStatus"></div>
<a href="userRegistration.php">Add user</a>
<a href="adminDashboard.php">Back</a>
<a href="../controller/logout.php">Logout</a> 
</body>
</html>
