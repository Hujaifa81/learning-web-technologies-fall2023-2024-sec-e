<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <script src="../assest/js/signInCheck.js"></script>
    <script src="../assest/js/validation.js"></script>
    
</head>
<body>
<?php
require_once ('../model/userModel.php');
$errorMsgEmail="";
$errorMsgPassword="";
$afterReg="";
$errorMsgInvalidUser="";
if(isset($_GET['success'])){
    $afterReg="successfully created";
}
if (isset($_GET['errorMsgEmail'])) {
    $errorMsgEmail = $_GET["errorMsgEmail"];
    
}
if (isset($_GET['errorMsgPassword'])) {
    $errorMsgPassword = $_GET["errorMsgPassword"];
    
}
$email='';
if(isset($_GET['email'])){
    $email=$_GET['email'];
}
if(isset($_GET['errorMsg'])){
    $errorMsg=$_GET['errorMsg'];
    switch($errorMsg){
        case 'invalidEmail':{
            $errorMsgEmail='Invalid Email';
            break;
        }
        case 'invalidPassword':{
            $errorMsgPassword="Password is invalid.NOTE:Password must have special character,Capital letter,small letter and number and length not less than 8";
            break;
        }
        case 'invalidUser':{
            $errorMsgInvalidUser="Invalid user";
        }
    }
}
?>
<h1 align="center">Welcome to Complaints Management System</h1>
<?php echo "<h5>{$afterReg}</h5>"?><br>
<?php if(isset($_GET['passwordChanged'])){echo "<h3>password changed successfully</h3>";}?>

<form onsubmit="validateForm()" action="../controller/signInCheck.php" method="POST">
    Email: <input type="email" name="email" id="email"value="<?php echo $email;?>"><?php   echo $errorMsgEmail;  ?><br><br>
    Password: <input type="password" name="password" id="password"><?php  echo $errorMsgPassword;  ?>
    
    <?php echo "<h3 id='errorMsgInvalidUser'>{$errorMsgInvalidUser}</h3>";?>
    <input type="submit" name="signIn" id="" value="signIn"><br><br>
    <a href="forgetPassword.php?forgetPassword=true">Forgot Password</a>
</form>
<h4>Not registered yet?<a href="userRegistration.php">Register here!</a></h4>

</body>
</html>