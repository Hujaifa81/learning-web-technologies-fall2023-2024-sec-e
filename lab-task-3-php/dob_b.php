<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <fieldset>
            <legend>Date of Birth</legend>
            <p>dd   mm    yyyy</p>
            <input type="text" name="date"size="1"> /

                <input type="text" name="month"size="1"> /

                <input type="text" name="year"size="1">

                
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </fieldset>
    </form>
    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $date=$_REQUEST["date"];
$month=$_REQUEST["month"];
$year=$_REQUEST["year"];
echo "$date /$month/$year";
}
?>
</body>

</html>


