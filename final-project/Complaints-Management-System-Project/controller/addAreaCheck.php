<?php
session_start();
include_once('../model/geographicCoveragesModel.php');
$area=$_POST['area'];
$helpline=$_POST['helpline'];
$status=$_POST['status'];
if($area==""){
    echo "invalid area";
}
else if($helpline==""){
    echo "invalid helpline";
}
else if($status==""){
    echo "invalid status";
}
else if(getAreaWithArea($area)){
    echo "area already existed";
}
else{
    addArea($area,$helpline,$status);
    echo "area added";
}

?>