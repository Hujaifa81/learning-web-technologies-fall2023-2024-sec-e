<?php
include_once('../model/geographicCoveragesModel.php');
$areaId = $_POST['areaId'];
$areas = getAllAreas();
echo json_encode($areas);
?>