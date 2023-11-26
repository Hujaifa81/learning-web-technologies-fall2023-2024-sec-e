<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <script src="../assest/js/forgetPasswordUsingAjax.js"></script>
    <script src="../assest/js/validation.js"></script>
  
</head>
<body>
<?php

$errorMsgPhone="";
$errorMsgNewPassword="";
$errorMsgConfirmPassword="";
if (isset($_GET['errorMsgPhone'])) {
    $errorMsgPhone= $_GET["errorMsgPhone"];
    
}
if (isset($_GET['errorMsgNewPassword'])) {
    $errorMsgNewPassword = $_GET["errorMsgNewPassword"];
    
}
if (isset($_GET['errorMsgConfirmPassword'])) {
    $errorMsgConfirmPassword = $_GET["errorMsgConfirmPassword"];
    
}
$phone='';
if(isset($_GET['phone'])){
    $phone=$_GET['phone'];
}
if(isset($_GET['errorMsg'])){
    $errorMsg=$_GET['errorMsg'];
    switch($errorMsg){
        
        case 'invalidPhone':{
            $errorMsgPhone= "Your phone is invalid.";
            break;
        }
        case 'invalidPassword':{
            $errorMsgNewPassword="Password is invalid.NOTE:Password must have special character,Capital letter,small letter and number and length not less than 8";
            break;
        }
        case 'invalidConfirmPassword':{
            $errorMsgConfirmPassword="Password mismatch.";
            break;
        }


    }
}
?>
<?php if(isset($_GET['passwordNotChanged'])){echo "<h3>user not found</h3>";}?>
<div id="message"></div>
<div id="forgetPasswordForm">
    Phone: <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
    <?php echo $errorMsgPhone; ?><br> <br>

    New password: <input type="password" name="newPassword" id="newPassword">
    <?php echo $errorMsgNewPassword; ?><br> <br>

    Confirm password: <input type="password" name="confirmPassword" id="confirmPassword">
    <?php echo $errorMsgConfirmPassword; ?><br> <br>

    <button type="button" id="submitBtn">Submit</button>
</div>
<a href="signIn.php">Back</a>
</body>
