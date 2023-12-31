<?php
include_once("../model/userModel.php");
include_once("../controller/validation.php");
$email=$_POST['email'];
$status=getUser($email);
if(isValidEmail($email)){
    if($status==true){
        echo "email not available";
    }
    else{
        echo "email available";
    }
    

}
else{
    echo "email is invalid";
}
?>