<?php
session_start();
require_once('../model/employeeModel.php');

if (!isset($_POST['searchSubmit'])) {
    header('location:../view/searchEmployees.php');
}

$id = $_POST['search'];
$searchResult = getSearchEmployeesById($id);

if ($searchResult) {
    $_SESSION['employees'] = $searchResult;
    echo 'Reload the page.';
} else {
    echo 'No employees found.';
}
?>
