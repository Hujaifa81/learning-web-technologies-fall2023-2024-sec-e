<?php
include_once("../model/userModel.php");
include_once("../controller/validation.php");
$id=$_POST['id'];
$userName=$_POST['userName'];
$email=$_POST['email'];
if(!isValidUserName($userName)){
    echo "invalid userName";

}
else if(!isValidEmail($email)){
    echo "invalid email";
}
else{
    updateUser($id,$email,$userName);
    echo "user updated";
}

?>