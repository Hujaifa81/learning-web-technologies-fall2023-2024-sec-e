<!DOCTYPE html>
<html>
    <head>
<title>Available area</title>
<script src="../asset/js/availableArea.js"></script>
<link rel="stylesheet" href="../asset/css/coverageAvailable.css">

    </head>
<body>
<?php
session_start();
if(isset($_GET['userName'])){
    $userId=$_SESSION['id'];
     
}
?>

<button onclick="availableArea()">Show Status</button>
<div id="searchText">
        <table id='table' border='1'>
            
            
        </table>
    </div>

    <br><br><br>

<button><a href="userDashboard.php">Back</a></button>

<button><a href="../controller/logout.php">Logout</a> </button>
</body>

</html>



