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
<form action="../controller/forgetPasswordCheck.php" method="POST">
    Phone: <input type="text" name="phone" value="<?php echo $phone;?>"><?php   echo $errorMsgPhone;  ?><br> <br>
    New password: <input type="password" name="newPassword" id=""><?php   echo $errorMsgNewPassword;  ?><br> <br>
    Confirm password: <input type="password" name="confirmPassword"><?php   echo $errorMsgConfirmPassword;  ?><br> <br>
    <input type="submit" name="forgetPasswordSubmit" value='submit'>
</form>
<a href="signIn.php">Back</a>
