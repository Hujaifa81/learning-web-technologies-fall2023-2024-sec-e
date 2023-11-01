<?php

    require_once('db.php');
    // function login($username, $password){
    //     $con = getConnection();
    //     $sql = "select * from users where username='{$username}' and password='{$password}'";
    //     $result = mysqli_query($con, $sql);
    //     $user = mysqli_fetch_assoc($result);
        
    //     if(count($user) > 0){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    function signup($user){
    $id = $user['id'];
    $password = $user['password'];
    $confirmPassword = $user['confirmPassword'];
    $name=$user['name'];
    $userType=$user['userType'];
        $sql="INSERT INTO user (id,password,confirmPassword,name,userType) VALUES ('$id','$password','$confirmPassword','$name','$userType')";
        if(mysqli_query($con,$sql))
        {
            
            
            header('location:login.html');
            
        }
        
        else{
            echo "Not inserted";
        }
    }
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    // function getAllUser(){
    //     $con = getConnection();
    //     $sql = "select * from users";
    //     $result = mysqli_query($con, $sql);
    //     $users = [];
        
    //     while($user = mysqli_fetch_assoc($result)){
    //         array_push($users, $user);
    //     }
        
    //     return $users;
    // }

    // function adduser(){

    // }

    // function deleteUser(){

    // }

    // function updateUser(){
        
    // }


?>