<?php
session_start();

$errorMsgRole="";
$errorMsgFirstName="";
$errorMsgLastName="";
$errorMsgUserName="";
$errorMsgEmail="";
$errorMsgPhone="";
$errorMsgPassword="";
$errorMsgConfirmPassword="";
$errorMsgGender="";
$errorMsgDistrict="";
$errorMsgAddress="";
$errorMsgProfile="";
$errorMsgAgreement="";
$errorMsgExisted='';


if (isset($_GET['errorMsgRole'])) {
    $errorMsgRole = $_GET["errorMsgRole"];
    
}
if (isset($_GET['errorMsgFirstName'])) {
    $errorMsgFirstName = $_GET["errorMsgFirstName"];
    
}
if (isset($_GET['errorMsgLastName'])) {
    $errorMsgLastName = $_GET["errorMsgLastName"];
    
}
if (isset($_GET['errorMsgUserName'])) {
    $errorMsgUserName = $_GET["errorMsgUserName"];
    
}
if (isset($_GET['errorMsgEmail'])) {
    $errorMsgEmail = $_GET["errorMsgEmail"];
    
}
if (isset($_GET['errorMsgPhone'])) {
    $errorMsgPhone= $_GET["errorMsgPhone"];
    
}
if (isset($_GET['errorMsgPassword'])) {
    $errorMsgPassword = $_GET["errorMsgPassword"];
    
}
if (isset($_GET['errorMsgConfirmPassword'])) {
    $errorMsgConfirmPassword = $_GET["errorMsgConfirmPassword"];
    
}
if (isset($_GET['errorMsgGender'])) {
    $errorMsgGender = $_GET["errorMsgGender"];
    
}
if (isset($_GET['errorMsgAddress'])) {
    $errorMsgAddress = $_GET["errorMsgAddress"];
    
}
if (isset($_GET['errorMsgDistrict'])) {
    $errorMsgDistrict = $_GET["errorMsgDistrict"];
    
}
if (isset($_GET['errorMsgProfile'])) {
    $errorMsgProfile = $_GET["errorMsgProfile"];
    
}
if (isset($_GET['errorMsgAgreement'])) {
    $errorMsgAgreement = $_GET["errorMsgAgreement"];
    
}


$firstName='';
$lastName='';
$userName='';
$email='';
$phone='';
if(isset($_GET['firstName'])){
    $firstName=$_GET['firstName'];
}
if(isset($_GET["lastName"])){
    $lastName=$_GET["lastName"];
}
if(isset($_GET['userName'])){
    $userName=$_GET['userName'];
}
if(isset($_GET['email'])){
    $email=$_GET['email'];
}
if(isset($_GET['phone'])){
    $phone=$_GET['phone'];
}

if(isset($_GET['errorMsg'])){
    $errorMsg=$_GET['errorMsg'];
    switch($errorMsg){
        case 'invalidFirstName':{
            $errorMsgFirstName='The First name is invalid. Note: Alpahbets  only and at least 4 character long';
            break;
        }
        case 'invalidLastName':{
            $errorMsgLastName='The Last name is invalid. Note: Alpahbets  only and at least 4 character long';
            break;
        }
        case 'invalidUserName':{
            $errorMsgUserName='The User name is invalid. Note: Alpahbets,numbers and underscore only and at least 4 character long';
            break;
        }
        case 'invalidEmail':{
            $errorMsgEmail='Invalid Email';
            break;
        }
        case 'invalidPhone':{
            $errorMsgPhone= "Your phone is invalid.";
            break;
        }
        case 'invalidPassword':{
            $errorMsgPassword="Password is invalid.NOTE:Password must have special character,Capital letter,small letter and number and length not less than 8";
            break;
        }
        case 'invalidConfirmPassword':{
            $errorMsgConfirmPassword="Password mismatch.";
            break;
        }
        case 'invalidAddress':{
            $errorMsgAddress='Please provide correct address';
            break;
        }
        case 'invalidType':{
            $errorMsgProfile='invalid type or too large file size.Note:File types are:jpg,jpeg and png.File size not more than 10 mb';
            break;
        }
        case 'userExisted':{
            $errorMsgExisted='User Already exists';

        }

    }
}

?>



    <form action="../controller/userRegistrationCheck.php" method="POST" enctype="multipart/form-data">
        <?php echo "<h1>{$errorMsgExisted}</h1>"; ?>
        Role: <input type="radio" name="role" value="User">User <input type="radio" name="role" value="admin">Admin  <?php   echo $errorMsgRole;  ?><br> <br>
        
        First Name: <input type="text" name="firstName" id="" value="<?php echo $firstName;?>"><?php   echo $errorMsgFirstName;  ?><br> <br>
       
        Last Name: <input type="text" name="lastName" id="" value="<?php echo $lastName;?>"><?php   echo $errorMsgLastName;  ?><br> <br>
        Username: <input type="text" name="userName" id="" value="<?php echo $userName;?>"><?php   echo $errorMsgUserName;  ?><br> <br> 
        Email: <input type="email" name="email" id=""value="<?php echo $email;?>"><?php   echo $errorMsgEmail;  ?><br> <br>
        Phone: <input type="text" name="phone" id="" value="<?php echo $phone;?>"><?php   echo $errorMsgPhone;  ?><br> <br>
        Password: <input type="password" name="password" id=""><?php   echo $errorMsgPassword;  ?><br> <br>
        Confirm Password: <input type="password" name="confirmPassword" id=""><?php   echo $errorMsgConfirmPassword;  ?><br> <br>
        Gender: <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female  <input type="radio" name="gender" value="others">Others <?php   echo $errorMsgGender;  ?><br> <br>
        District: 
        <select  name="district">
        <option value="dhaka">Dhaka</option>
        <option value="mymensingh">Mymensingh</option>
        <option value="sylhet">sylhet</option>
        <option value="barishal">barishal</option>
        <option value="rangpur">Rangpur</option>
        </select> <?php   echo $errorMsgDistrict;  ?><br> <br>
        Address: <textarea name="address" id="address" cols="30" rows="3"></textarea><?php   echo $errorMsgAddress;  ?><br> <br>
        Profile: <input type="file" name="profile" id=""><?php   echo $errorMsgProfile;  ?><br> <br>
        <input  type="checkbox" value="agreement" name="agreement">I have read and accepted the Account Agreement <?php   echo $errorMsgAgreement;  ?><br>  <br>
        <input type="submit" value="Register" name="userRegistration">
    </form>
