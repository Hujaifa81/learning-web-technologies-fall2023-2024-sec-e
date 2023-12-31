<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="../asset/css/forgetPassword.css">
    <script src="../asset/js/forgetPassword.js"></script>
</head>
<body>
    <div class="center-container">
        <div class="container">
            <h1>Forget Password</h1>
            <form>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" required>
                <span id="phoneS"></span>

                <label for="newPassword">New Password:</label>
                <input type="password" name="newPassword" id="newPassword" required>
                <span id="newPasswordS"></span>

                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="confirmPasswordCheck()" required>
                <span id="confirmPasswordS"></span>

                <div id="changeS"></div>

                <button type="button" onclick="forgetPasswordCheck()">Submit</button>
            </form>

            <a href="signIn.php">Back to Sign In</a>
        </div>
    </div>
</body>
</html>
