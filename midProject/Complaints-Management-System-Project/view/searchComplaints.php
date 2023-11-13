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
<form action="../controller/searchCheck.php" method="POST">
    Search: <input type="text" name="search"> <br><br>
    <input type="submit" name="searchSubmit" value="search"><br><br>
</form>
<a href="adminDashboard.php">Back</a>
<a href="../controller/logout.php">Logout</a>
