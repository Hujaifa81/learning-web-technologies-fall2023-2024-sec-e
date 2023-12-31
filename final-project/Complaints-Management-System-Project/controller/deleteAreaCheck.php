<?php
include_once('../model/geographicCoveragesModel.php');
$areaId = $_POST['areaId'];
if (deleteArea($areaId)) {
    $areas = getAllAreas();
    echo json_encode($areas);
}

?>

