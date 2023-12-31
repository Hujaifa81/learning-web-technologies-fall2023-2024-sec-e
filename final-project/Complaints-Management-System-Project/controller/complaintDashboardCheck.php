<?php
include_once('../model/complaintsModel.php');
session_start();
$id=$_SESSION['id'];
$receivedId=$_POST['id'];
if($receivedId==0){
    $arrayP=getAllUserProcessingComplaints($id);
    $arrayLengthP=count($arrayP);
    if($arrayLengthP>0){
        $arrayLengthP=count($arrayP);
    }
    else{
        $arrayLengthP=0;
    }
    echo $arrayLengthP;
}
else if($receivedId==1){
    $arrayR=getAllUserReceivedComplaints($id);
    $arrayLengthR=count($arrayR);
    if($arrayLengthR>0){
        $arrayLengthR=count($arrayR);
    }
    else{
        $arrayLengthR=0;
    }
    echo $arrayLengthR;
}
else if($receivedId==2){
    $arrayC=getAllUserCompletedComplaints($id);
    $arrayLengthC=count($arrayC);
    if($arrayLengthC>0){
        $arrayLengthC=count($arrayC);
    }
    else{
        $arrayLengthC=0;
    }
    echo $arrayLengthC;
}
?>