<?php
include_once("../model/userModel.php");
include_once("../controller/validation.php");
$name=$_POST['name'];
if(!isValidName($name)){
    echo "name is invalid. Note: Alphabets  only and at least 4 character long ";

}

?>