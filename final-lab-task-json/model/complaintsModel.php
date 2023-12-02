<?php
require_once ('db.php');
function getAllComplaints(){
    $con = dbConnection();
    $sql = "SELECT * from complaints";
    
    if($result = mysqli_query($con, $sql)){
        $complaints = array();
        while($complaint = mysqli_fetch_assoc($result)){
            array_push($complaints, $complaint);
        }
        return $complaints;
    }
    return false;
}
function getComplaintWithId($id){
    $con = dbConnection();
    $sql = "SELECT * from complaints where complaintId='{$id}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function deleteComplaint($complaintId){
    $deleteId=$complaintId;
    $con=dbConnection();
    $sql="DELETE FROM complaints WHERE complaintId='{$deleteId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function updateComplaint($complaintId,$status){
    $con=dbConnection();
    $sql ="UPDATE complaints SET status='{$status}'  WHERE complaintId='{$complaintId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function getSearchComplaintsByCategory($category){
    $con = dbConnection();
    $sql = "SELECT * from complaints where category='{$category}'";
    
    if($result = mysqli_query($con, $sql)){
        $complaints = array();
        while($complaint = mysqli_fetch_assoc($result)){
            array_push($complaints, $complaint);
        }
        return $complaints;
    }
    return false;
}
?>