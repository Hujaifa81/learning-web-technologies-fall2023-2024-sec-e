<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assest/js/register.js"></script>
    <script src="../assest/js/validation.js"></script>
   
</head>
<body>
    <form onsubmit="validateForm()" action="../controller/registerCheck.php" method="POST">
    <h1 align="center">Registration</h1>
    Name:<input type="text" name="name" id="name"><br><br>
    Phone: <input type="text" name="phone" id="phone"><br><br>
    Email: <input type="email" name="email" id="email" onblur="ajax()"><span>
        <span id="emailSpan"></span>
</span><br><br>
    Password : <input type="password" name="password" id="password"><br><br>
    Confirm Password : <input type="password" name="confirmPassword" id="confirmPassword"><br><br>
    <input type="submit" name="register" id="register" value="Register">

</form>
    
</body>
</html>