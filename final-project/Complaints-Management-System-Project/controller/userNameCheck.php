<?php
include_once("../model/userModel.php");
include_once("../controller/validation.php");
$userName=$_POST['userName'];
$status=getUserWithUserName($userName);
if(isValidUserName($userName)){
    if($status==true){
        echo "userName not available";
    }
    else{
        echo "userName available";
    }
    

}
else{
    echo "userName is invalid";
}
?>