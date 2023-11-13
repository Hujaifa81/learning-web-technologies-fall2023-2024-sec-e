<?php
require_once ('db.php');
function getAllAreas(){
    $con = dbConnection();
    $sql = "SELECT * from areas";
    
    if($result = mysqli_query($con, $sql)){
        $areas = array();
        while($area = mysqli_fetch_assoc($result)){
            array_push($areas, $area);
        }
        return $areas;
    }
    return false;
}
function deleteArea($areaId){
    $deleteId=$areaId;
    $con=dbConnection();
    $sql="DELETE FROM areas WHERE id='{$deleteId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function getAreaWithId($id){
    $con = dbConnection();
    $sql = "SELECT * from areas where id='{$id}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function updateArea($areaId,$helpline,$status){
    $con=dbConnection();
    $sql ="UPDATE areas SET status='$status', helpline='$helpline'  WHERE id='$areaId';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function addArea($area,$helpline,$status){
    $con = dbConnection();
    $sql = "INSERT INTO areas (area,helpline,status) VALUES(
                                    '{$area}',
                                    '{$helpline}',
                                    '{$status}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}
?>