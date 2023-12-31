<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Complaint Registration</title>
    <script src="../asset/js/ajax.js"></script>
    <link rel="stylesheet" href="../asset/css/userRegistration.css">
    
    </head>
    <body>
    
    <form onsubmit="return validateForm()" action="../controller/userRegistrationCheck.php"  method="POST" enctype="multipart/form-data">
        
        Role: <input type="radio" name="role" value="User" id="user">User <input type="radio" name="role" value="admin" id="admin">Admin <span id="roleS"></span><br><br>
        
        First Name: <input type="text" name="firstName" id="firstName" value="" ><span id="firstNameS"></span><br><br>

        Last Name: <input type="text" name="lastName" id="lastName" value="" > <span id="lastNameS"></span><br><br>
        Username: <input type="text" name="userName" id="userName" value="" onblur="userNameCheck()"><span id="userNameS"></span><br><br>
        Email: <input type="email" name="email" id="email" value="" onblur="emailCheck()"><span id="emailS"></span><br><br>
        Phone: <input type="text" name="phone" id="phone" value=""><span id="phoneS"></span><br><br>
        Password: <input type="password" name="password" id="password"><span id="passwordS"></span><br><br>
        Confirm Password: <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="confirmPasswordCheck()"><span id="confirmPasswordS"></span><br><br>
        Gender:
<input type="radio" name="gender" value="male" id="male" >Male
<input type="radio" name="gender" value="female" id="female">Female
<input type="radio" name="gender" value="others" id="others">Others
<span id="genderS"></span><br><br>

        District: 
        <select  name="district" id="district">
        <option value=""> </option>
        <option value="dhaka">Dhaka</option>
        <option value="mymensingh">Mymensingh</option>
        <option value="sylhet">sylhet</option>
        <option value="barishal">barishal</option>
        <option value="rangpur">Rangpur</option>
        </select> <span id="districtS"></span><br><br>
        Address: <textarea name="address" id="address" cols="30" rows="3"></textarea> <span id="addressS"></span><br><br>
        Profile: <input type="file" name="profile" id="profile"><span id="profileS"></span><br> <br>
        <input  type="checkbox" value="agreement" name="agreement" id="agreement">I have read and accepted the Account Agreement. <span id="agreementS"></span><br> <br>
        <input type="submit" value="Register" name="userRegistration">
    </form>
    <a href="signIn.php">Back</a>
</body>
</html>


    
