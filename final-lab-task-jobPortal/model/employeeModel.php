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
    $sql = "INSERT INTO employees (userName,firstName,lastName,email,phone,gender,district,address,password,role,profile) VALUES(
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
function addEmployee($employeeName,$companyName,$contactNo,$userName,$password){
    $con = dbConnection();
    $sql = "INSERT INTO employees (employeeName,companyName,phone,userName,password) VALUES(
                                    '{$employeeName}',
                                    '{$companyName}',
                                    '{$phone}',
                                    '{$userName},
                                    '{$password}";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}
function getSearchEmployeesById($id){
    $con = dbConnection();
    $sql = "SELECT * from employees where id='{$id}'";
    
    if($result = mysqli_query($con, $sql)){
        $employees = array();
        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
        return $employees;
    }
    return false;
}
function logIn($email,$password){
    $con=dbConnection();
    $sql="SELECT * FROM employees WHERE email='{$email}' AND password='{$password}'";
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
    $sql = "SELECT * from employees where email='{$email}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getUserWithId($id){
    $con = dbConnection();
    $sql = "SELECT * from employees where id='{$id}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getUserWithPhone($phone){
    $con = dbConnection();
    $sql = "SELECT * from employees where phone='{$phone}';";
    
    if($result = mysqli_query($con, $sql)){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function getAllUsers(){
    $con = dbConnection();
    $sql = "SELECT * from employees WHERE role='user';";
    
    if($result = mysqli_query($con, $sql)){
        $employees = array();
        while($employee = mysqli_fetch_assoc($result)){
            array_push($employees, $employee);
        }
        return $employees;
    }
    return false;
}
function deleteUser($employeeId){
    $deleteId=$employeeId;
    $con=dbConnection();
    $sql="DELETE FROM employees WHERE id='{$deleteId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function updateUser($employeeId,$email,$userName){
    $con=dbConnection();
    $sql ="UPDATE employees SET email='{$email}', userName='{$userName}'  WHERE id='{$employeeId}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
function updatePassword($phone,$newPassword,$confirmPassword){
    $con=dbConnection();
    $sql ="UPDATE employees SET password='{$newPassword}'  WHERE phone='{$phone}';";
    if(mysqli_query($con,$sql)){
        return true;
    }
    else{
        return false;
    }
}
?>