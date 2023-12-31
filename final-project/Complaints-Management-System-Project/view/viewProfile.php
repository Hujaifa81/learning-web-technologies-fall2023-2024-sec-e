<?php
session_start();
$firstName=$_SESSION['user']['firstName'];
$lastName=$_SESSION['user']['lastName'];
$userName=$_SESSION['user']['userName'];
$email=$_SESSION['user']['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../asset/css/viewProfile.css">

</head>
<body>
    <table>
        <tr>
            <td>First Name:</td>
            <td><?php echo $firstName; ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><?php echo $lastName; ?></td>
        </tr>
        <tr>
            <td>User Name:</td>
            <td><?php echo $userName; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>

    <ul>
        <li><a href="changePassword.php">Change Password</a></li>
    </ul>

    <!-- <button><a href="userDashboard.php">Back</a></button> -->
    <button><a href="../controller/logout.php">Logout</a></button>
</body>
</html>
