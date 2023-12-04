<?php
$host='localhost';
$userDb='root';
$pass='';
$dbName='persondb';

function dbConnection(){
   global $host;
   global $userDb;
   global $pass;
   global $dbName;
   $con=mysqli_connect($host,$userDb,$pass,$dbName);
   return $con;
}
?>