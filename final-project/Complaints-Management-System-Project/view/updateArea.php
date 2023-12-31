

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Area</title>
    <script src="../asset/js/updateGeographicCoverages.js"></script>
    <link rel="stylesheet" href="../asset/css/updateArea.css">
    

</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['loggedIn'])) {
            header('location: signIn.php');
            exit();
        }
        require_once("../model/geographicCoveragesModel.php");
        $id=$_GET['areaId'];
        $area=getAreaWithId($id);
        $status=$area['status'];
        $helpline=$area['helpline'];
    ?>

    Status: <input type="text" name="updateStatus" value="<?php echo $status;?>" id="aStatus"><span id ="statusS"></span>
    Helpline: <input type="text" name="updateHelpline" value="<?php echo $helpline;?>"id = "aHelpline"><span id = "helplineS"></span>
    Area id: <input type="text" name="id" value="<?php echo $id;?>" id = "aAreaId">
    <button onclick="updateArea()">Click</button>
    <div id="resultS"></div>

<a href="manageGeographicCoverages.php">Back</a>
<a href="../controller/logout.php">Logout</a>


    
</body>
</html>