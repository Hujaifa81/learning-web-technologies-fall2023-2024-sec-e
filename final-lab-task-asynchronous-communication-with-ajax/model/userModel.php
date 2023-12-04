<?php
require_once ('db.php');
function isUserExist($name,$email){
    $con=dbConnection();
    $sql="SELECT * FROM persons WHERE name='{$name}' AND email='{$email}'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }

}
function addUser($name,$email, $phone, $password)
{
        
    $con = dbConnection();
    $sql = "INSERT INTO persons (name,email,phone,password) VALUES(
                                    '{$name}',
                                    '{$email}',
                                    '{$phone}',
                                    '{$password}'
                                    )";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}
function logIn($email,$password){
    $con=dbConnection();
    $sql="SELECT * FROM persons WHERE email='{$email}' AND password='{$password}'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }
}
function getUser($email){
    $con = dbConnection();
    $sql = "SELECT * from persons where email='{$email}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}



?>