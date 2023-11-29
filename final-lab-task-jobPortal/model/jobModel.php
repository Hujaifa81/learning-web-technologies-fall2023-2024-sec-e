<?php
require_once ('db.php');
function getAllJobs(){
    $con = dbConnection();
    $sql = "SELECT * from jobs";
    
    if($result = mysqli_query($con, $sql)){
        $jobs = array();
        while($job = mysqli_fetch_assoc($result)){
            array_push($jobs, $job);
        }
        return $jobs;
    }
    return false;
}
function deleteJob($jobId){
    $deleteId=$jobId;
    $con=dbConnection();
    $sql="DELETE FROM jobs WHERE id='{$deleteId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function getJobWithId($id){
    $con = dbConnection();
    $sql = "SELECT * from jobs where id='{$id}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function updateJob($companyName,$jobTitle,$jobLocation,$salary){
    $con=dbConnection();
    $sql ="UPDATE jobs SET companyName='$companyName', jobTitle='$jobTitle',jobLocation='$jobLocation',salary='$salary' WHERE id='$jobId';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function addArea($companyName,$jobTitle,$jobLocation,$salary){
    $con = dbConnection();
    $sql = "INSERT INTO jobs (companyName,jobTitle,jobLocation,salary) VALUES(
                                    '{$companyName}',
                                    '{$jobTitle}',
                                    '{$jobLocation}'),
                                    '{$salary}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}
?>