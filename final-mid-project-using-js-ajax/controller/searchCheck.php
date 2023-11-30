<?php
session_start();
require_once('../model/complaintsModel.php');

if (!isset($_POST['searchSubmit'])) {
    header('location:../view/searchComplaints.php');
}

$category = $_POST['search'];
$searchResult = getSearchComplaintsByCategory($category);

if ($searchResult) {
    $_SESSION['complaints'] = $searchResult;
    header('location:../view/searchComplaints.php?done=true');
    
    
} else {
    echo 'No complaints found.';
}
?>
