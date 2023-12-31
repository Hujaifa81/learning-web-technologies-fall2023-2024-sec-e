<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Complaint</title>
    <script src="../asset/js/addComplain.js"></script>
    <link rel="stylesheet" href="../asset/css/addComplain.css">

</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}

?>
<form>
    <center>
    Category: <input type="text" name="	Category" id="	Category">
    Helpline: <input type="text" name="helpline" id="helpline">
    Status: <input type="text" name="status" id="status">
    <button onclick="addArea()">Add</button>
    <div id="areaResultS"></div>

<a href="manageGeographicCoverages.php">Back</a>
<a href="../controller/logout.php">Logout</a>
    </center>
</form>

</body>
</html>