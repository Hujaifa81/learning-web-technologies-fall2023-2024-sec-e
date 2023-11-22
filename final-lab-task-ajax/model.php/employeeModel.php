<?php
require_once ('db.php');
function searchEmployee($id){
    $con = dbConnection();
    $sql = "SELECT * from employees where id='{$id}';";
    
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