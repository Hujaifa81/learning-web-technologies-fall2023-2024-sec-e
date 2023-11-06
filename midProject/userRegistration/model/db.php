<?php
$host='localhost';
$user='root';
$pass='';
$dbName='midProject';

function dbConnection(){
   global $host;
   global $user;
   global $pass;
   global $dbName;
   $con=mysqli_connect($host,$user,$pass,$dbName);
   return $con;
}
?>