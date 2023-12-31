<?php
require_once ('db.php');
function isUserExist($userName,$email){
    $con=dbConnection();
    $sql="SELECT * FROM users WHERE userName='{$userName}' AND email='{$email}'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        return true;
    }
    else{
        return false;
    }

}
function addUser($userName, $firstName, $lastName, $email, $phone, $gender,$district, $address, $password, $role, $profileLocation)
{
        
    $con = dbConnection();
    $sql = "INSERT INTO users (userName,firstName,lastName,email,phone,gender,district,address,password,role,profile) VALUES(
                                    '{$userName}',
                                    '{$firstName}',
                                    '{$lastName}',
                                    '{$email}',
                                    '{$phone}',
                                    '{$gender}',
                                    '{$district}',
                                    '{$address}',
                                    '{$password}',
                                    '{$role}',
                                    '{$profileLocation}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}
function logIn($email,$password){
    $con=dbConnection();
    $sql="SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
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
    $sql = "SELECT * from users where email='{$email}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getUserWithId($id){
    $con = dbConnection();
    $sql = "SELECT * from users where id='{$id}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getUserWithUserName($userName){
    $con = dbConnection();
    $sql = "SELECT * from users where userName='{$userName}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getUserWithPhone($phone){
    $con = dbConnection();
    $sql = "SELECT * from users where phone='{$phone}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getAllUsers(){
    $con = dbConnection();
    $sql = "SELECT * from users WHERE role='user';";
    
    if($result = mysqli_query($con, $sql)){
        $users = array();
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users;
    }
    return false;
}
function deleteUser($userId){
    $deleteId=$userId;
    $con=dbConnection();
    $sql="DELETE FROM users WHERE id='{$deleteId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function updateUser($userId,$email,$userName){
    $con=dbConnection();
    $sql ="UPDATE users SET email='{$email}', userName='{$userName}'  WHERE id='{$userId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function updatePassword($phone,$newPassword,$confirmPassword){
    $con=dbConnection();
    $sql ="UPDATE users SET password='{$newPassword}'  WHERE phone='{$phone}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function getUserWithIdPassword($id,$oldPassword){
    $con = dbConnection();
    $sql = "SELECT * from users where id='{$id}' AND password='{$oldPassword}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function updatePasswordWithId($id,$newPassword){
    $con=dbConnection();
    $sql ="UPDATE users SET password='{$newPassword}'  WHERE id='{$id}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
?>