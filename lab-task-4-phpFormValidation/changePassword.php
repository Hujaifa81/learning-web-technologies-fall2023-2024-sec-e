<?php
$newPassword=$_REQUEST["newPassword"];
$currentPassword=$_REQUEST["currentPassword"];
$retypePassword=$_REQUEST["retypePassword"];

if($newPassword==$currentPassword){
    echo "New Password should not be same as the Current Password";
}
elseif($newPassword!=$retypePassword){
    echo "New Password must match with the Retyped Password";
}
else{
    echo "Valid";
}
?>