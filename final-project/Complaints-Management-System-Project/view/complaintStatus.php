<!DOCTYPE html>
<html>
    <head>
<title>complaint details</title>
<script src="../asset/js/showDetails.js"></script>
<link rel="stylesheet" href="../asset/css/complaintStatus.css">

    </head>
<body>
<?php
session_start();
if(isset($_GET['userName'])){
    $userId=$_SESSION['id'];
     
}
?>
<input type="text" id="hiddenUserId" value="<?php echo $userId?>" hidden>
<button onclick="showDetails()">Show Status</button>
<div id="searchText">
        <table id='table' border='1'>
            
            
        </table>
    </div>
    <button><a href="userDashboard.php">Back</a></button>

<button><a href="../controller/logout.php">Logout</a> </button>
</body>

</html>

