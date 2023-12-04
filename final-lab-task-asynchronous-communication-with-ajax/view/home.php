<?php
session_start();
$name = $_SESSION['name'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
?>

<h2>Name:</h2><?php echo "<h3> $name</h3>"; ?><br>
<h2>Phone:</h2><?php echo  "<h3> $phone</h3>"; ?><br>
<h2>Email:</h2><?php echo "<h3> $email</h3>";?><br>
<a href="../controller/logout.php">Log out</a>
