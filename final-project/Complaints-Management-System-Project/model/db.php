<?php
$host='localhost';
$userDb='root';
$passDb='';
$dbName='midproject';

function dbConnection(){
   global $host;
   global $userDb;
   global $passDb;
   global $dbName;
   $con=mysqli_connect($host,$userDb,$passDb,$dbName);
   return $con;
}
?>