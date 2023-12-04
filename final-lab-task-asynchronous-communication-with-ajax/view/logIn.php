<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <script src="../assest/js/signIn.js"></script>
    <script src="../assest/js/validation.js"></script>
    
</head>
<body>
<form onsubmit="validateForm()" action="../controller/logInCheck.php" method="POST">
    Email: <input type="email" name="email" id="email"value=""><br><br>
    Password: <input type="password" name="password" id="password"><br><br>
    
    
    <input type="submit" name="signIn" id="" value="signIn"><br><br>
    
</form>
<h4>Not registered yet?<a href="register.php">Register here!</a></h4>

</body>
</html>