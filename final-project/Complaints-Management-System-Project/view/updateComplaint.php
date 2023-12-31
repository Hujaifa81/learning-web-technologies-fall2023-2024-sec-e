


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Complaints</title>
    <link rel="stylesheet" href="../asset/css/updateComplaint.css">

    <script src="../asset/js/updateComplaint.js"></script>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['loggedIn'])) {
            header('location: signIn.php');
            exit();
        }

        require_once("../model/complaintsModel.php");

        $id=$_GET['complaintId'];
        $complaint=getComplaintWithId($id);
        $status=$complaint['status'];
    ?>
<div>
Status: <input type="text" name="updateStatus" value="<?php echo $status;?>" id="cStatus"><span id ="statusS"></span>
    Complaint id: <input type="text" name="id" value="<?php echo $id;?>" id = "cComplaintId">
    <button onclick="updateComplaint()">Click</button>
</div>
   
    <div id="resultS"></div>

<a href="manageComplaints.php">Back</a>
<a href="../controller/logout.php">Logout</a>


    
</body>
</html>