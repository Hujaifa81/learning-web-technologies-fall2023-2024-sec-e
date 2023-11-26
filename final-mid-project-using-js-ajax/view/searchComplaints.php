<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Complaints</title>
    <script src="../assest/js/searchComplaints.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}

if (isset($_SESSION['complaints'])) {
    $complaints = $_SESSION['complaints'];
?>
    <table border=1>
        <tr>
            <td>ComplaintId</td>
            <td>UserId</td>
            <td>Category</td>
            <td>Sub Category</td>
            <td>Status</td>
            <td>Complaint Details</td>
            
        </tr>
        <?php for ($i = 0; $i < count($complaints); $i++) { ?>
            <tr>
                <td><?= $complaints[$i]['complaintId'] ?></td>
                <td><?= $complaints[$i]['userId'] ?></td>
                <td><?= $complaints[$i]['category'] ?></td>
                <td><?=$complaints[$i]['subCategory']?></td>
                <td><?=$complaints[$i]['status']?></td>
                <td><?=$complaints[$i]['complaintDetails']?></td>
                
                
            </tr>
        <?php } ?>
    </table>
<?php
unset($_SESSION['complaints']); 
}
if(isset($_GET['NoComplaints'])){
     echo "<h2>No data found</h2>";
     unset($_SESSION['complaints']);
}
?>
<br><br>
    <form onsubmit="searchComplaints(); return false;">
        Search: <input type="text" name="search" id="search"> <br><br>
        <input type="submit" name="searchSubmit" value="Search"><br><br>
    </form>
    <a href="adminDashboard.php">Back</a>
    <a href="../controller/logout.php">Logout</a>

</body>
