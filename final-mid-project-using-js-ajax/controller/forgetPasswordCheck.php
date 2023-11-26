<?php
session_start();
require_once('./validation.php');
require_once('../model/userModel.php');

if (!isset($_POST['forgetPasswordSubmit'])) {
    echo "Invalid request";
    exit();
}

$phone = $_POST['phone'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

if (empty($phone) || !isValidPhone($phone)) {
    echo "invalidPhone";
    exit();
}

if (empty($newPassword) || !isValidPassword($newPassword)) {
    echo "invalidPassword";
    exit();
}

if (empty($confirmPassword) || !isValidConfirmPassword($newPassword, $confirmPassword)) {
    echo "invalidConfirmPassword";
    exit();
}

$status = getUserWithPhone($phone);

if ($status) {
    $updatePasswordStatus = updatePassword($phone, $newPassword, $confirmPassword);

    if ($updatePasswordStatus) {
        echo "success";
        exit();
    } else {
        echo "error";
        exit();
    }
} else {
    echo "userNotFound";
    exit();
}
?>
