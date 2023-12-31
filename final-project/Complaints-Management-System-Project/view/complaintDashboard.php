<?php
session_start();
if(!isset($_SESSION['loggedIn']))
{
    header('location:signIn.php');
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaint Dashboard</title>
    <script src="../asset/js/complaintDashboard.js"></script>
    <link rel="stylesheet" href="../asset/css/complaintDashboard.css">
</head>
<body>
    <div>
        <p>Received Complaint:<span id="receivedComplaint"></span></p>
        <button id="receivedComplaintBtn" onclick="received()">Click</button>
    </div>
    <div>
        <p>Completed Complaint:<span id="completedComplaint"></p>
        <button id="completedComplaintBtn" onclick="completed()">Click</button>
    </div>
    <div>
        <p>Processing complaint:<span id="processingComplaint"></span></p>
        <button id="processingComplaintBtn" onclick="processing()">Click</button>
    </div>
    <br><br><br>
    <button><a href="userDashboard.php">Back</a></button>

    <button><a href="../controller/logout.php">Logout</a> </button>
</body>
</html>