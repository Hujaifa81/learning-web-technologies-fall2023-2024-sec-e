<?php
$host='localhost';
$userDb='root';
$pass='';
$dbName='finalExam';

function dbConnection(){
   global $host;
   global $userDb;
   global $pass;
   global $dbName;
   $con=mysqli_connect($host,$userDb,$pass,$dbName);
   return $con;
}
?>