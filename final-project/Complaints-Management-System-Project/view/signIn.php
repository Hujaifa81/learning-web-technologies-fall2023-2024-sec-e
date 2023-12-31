<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <script src="../asset/js/signIn.js"></script>
    <link rel="stylesheet" href="../asset/css/singin.css">
    
</head>
<body>
<center>
<h1 align="center">Welcome to <br>Complaints Management System</h1>
    Email: <input type="email" name="email" id="email"value=""><span id="emailS"></span><br><br>
    Password: <input type="password" name="password" id="password"><span id="passwordS"></span>
    <button id="logIn" onclick="signIn()">Log in</button>
    <div id="resultS"></div>
    <a href="forgetPassword.php?forgetPassword=true">Forgot Password</a>
<h4>Not registered yet?<a href="userRegistration.php">Register here!</a></h4>

</center>

</body>
</html>