<?php
session_start(); 

if (!isset($_SESSION['Email'])) {
    header('Location:../View/login.php'); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>
    <h2>Welcome, <?php echo $_SESSION['Name']; ?></h2>
    <a href='../View/userProfile.php'><h3>Profile</h3></a><br>
    <a href='../View/changePassword_User.php'><h3>Change Password</h3></a><br><br>
    <a href='../Controller/Logout.php'><h3>LogOut</h3></a><br>
   
    
</body>
</html>