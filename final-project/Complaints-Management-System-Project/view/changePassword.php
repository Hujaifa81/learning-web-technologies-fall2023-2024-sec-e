<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../asset/css/changePassword.css">
    <script src="../asset/js/changePassword.js"></script>
</head>
<body>
    <?php session_start() ?>
    <form action="" class="change-password-form">
        <div class="form-group">
            <label for="oldPassword">Old Password:</label>
            <input type="password" name="oldPassword" id="oldPassword">
            <span id="oldPasswordS"></span>
        </div>
        <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" name="newPassword" id="password">
            <span id="passwordS"></span>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" id="confirmPassword">
            <span id="confirmPasswordS"></span>
        </div>
        <div id="changePasswordS"></div>
        <button type="button" onclick="changePasswordCheck()">Change Password</button>
        <button id="btnBack"><a href="viewProfile.php">Back</a></button>
    </form>
</body>
</html>
