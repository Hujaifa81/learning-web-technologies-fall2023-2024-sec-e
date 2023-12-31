<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add area</title>
    <script src="../asset/js/addArea.js"></script>

    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        center {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #4caf50;
        }

        #areaResultS {
            margin-top: 10px;
            padding: 10px;
            background-color: #eee;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('location: signIn.php');
    exit();
}
?>

    <center>
        Area: <input type="text" name="area" id="area"><span id="areaS"></span><br><br>
        Helpline: <input type="text" name="helpline" id="helpline"><span id="helplineS"></span><br><br>
        Status: <input type="text" name="status" id="status"><span id="statusS"></span><br><br>
        <button onclick="addArea()">Add</button>
        <div id="areaResultS"></div>
        <br> 
        <a href="manageGeographicCoverages.php">Back</a>
        <a href="../controller/logout.php">Logout</a>
    </center>

</body>
</html>
