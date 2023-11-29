<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script src="../assest/js/searchUsingAjax.js"></script>
    <script src="../assest/js/validation.js"></script>
   
    
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}

if (isset($_SESSION['employees'])) {
    $employees = $_SESSION['employees'];
?>
    <table border=1>
        <tr>
            <td>EmployeeId</td>
            <td>EmployeeName</td>
            <td>CompanyName</td>
            <td>Phone</td>
            <td>UserName</td>
            <td>Password</td>
            
        </tr>
        <?php for ($i = 0; $i < count($employees); $i++) { ?>
            <tr>
                <td><?= $employees[$i]['employeeId'] ?></td>
                <td><?= $employees[$i]['employeeName'] ?></td>
                <td><?= $employees[$i]['companyName'] ?></td>
                <td><?=$employees[$i]['phone']?></td>
                <td><?=$employees[$i]['userName']?></td>
                <td><?=$employees[$i]['password']?></td>
                
                
            </tr>
        <?php } ?>
    </table>
<?php
unset($_SESSION['employees']); 
}
if(isset($_GET['NoEmployees'])){
     echo "<h2>No data found</h2>";
     unset($_SESSION['employees']);
}
?>
<br><br>
    <form onsubmit="searchEmployees(); return false;">
        Search: <input type="text" name="search" id="search"> <br><br>
        <input type="submit" name="searchSubmit" value="Search"><br><br>
    </form>
    <a href="adminDashboard.php">Back</a>
    <a href="../controller/logout.php">Logout</a>

</body>
