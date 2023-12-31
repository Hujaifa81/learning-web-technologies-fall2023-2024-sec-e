<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <script src="../asset/js/updateUser.js"></script>
    <link rel="stylesheet" href="../asset/css/updateUser.css">

</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
require_once("../model/userModel.php");

    $id=$_GET['userId'];
    $user=getUserWithId($id);
    $email=$user['email'];
    $userName=$user['userName'];

?>

    Email: <input type="email" name="updateEmail" value="<?php echo $email;?>" id="uEmail"><span id="emailS"></span>
    UserName: <input type="text" name="updateUserName" value="<?php echo $userName;?>" id="uUserName"><span id="userNameS"></span>
    ID: <input type="text" name="id" value="<?php echo $id;?>" id="uUserId">
    <button onclick="updateUser()">Click</button>
    <div id="resultS"></div>

<a href="manageUsers.php">Back</a>
<a href="../controller/logout.php">Logout</a> 
</body>
</html>