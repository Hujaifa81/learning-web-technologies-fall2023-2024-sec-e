
<?php
$name = $REQUEST["name"];
$email = $REQUEST["email"];
$userName = $REQUEST["userName"];
$password = $REQUEST["password"];
$confirmPassword = $REQUEST["confirmPassword"];
$gender = $REQUEST["gender"];
$day = $REQUEST["day"];
$month = $REQUEST["month"];
$year = $REQUEST["year"];

if ($name === null || $email === null || $userName === null || $password === null || $confirmPassword === null) {
    echo "All fields are required .";
}
?>
