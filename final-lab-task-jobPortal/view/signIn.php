<?php
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
<h1 align="center">Welcome to Job Portal</h1>
<?php echo "<h5>{$afterReg}</h5>"?><br>
<?php if(isset($_GET['passwordChanged'])){echo "<h3>password changed successfully</h3>";}?>

<form action="../controller/signInCheck.php" method="POST">
    Email: <input type="email" name="email" id=""value="<?php echo $email;?>"><?php   echo $errorMsgEmail;  ?><br><br>
    Password: <input type="password" name="password" id=""><?php  echo $errorMsgPassword;  ?>
    <?php echo "<h3>{$errorMsgInvalidUser}</h3>";?>
    <input type="submit" name="signIn" id="" value="signIn"><br><br>
    <a href="forgetPassword.php?forgetPassword=true">Forgot Password</a>
</form>
<h4>Not registered yet?<a href="userRegistration.php">Register here!</a></h4>