<?php
session_start();
include_once('../model/geographicCoveragesModel.php');
$area=$_POST['area'];
$areas = getAllAreas();
echo json_encode($areas);
?>