<?php 
  include_once('../controller/sessionCheck.php');
  require_once('../model/userModel.php');
  $users = getAllUser();
?>

<html lang="en">
<head>
    <title>View  Users</title>
</head>
<body>
        

        <table border=1>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>userType</td>
                
            </tr>
    <?php   for($i=0; $i<count($users); $i++){ ?>
            <tr>
                <td><?=$users[$i]['id']?></td>
                <td><?=$users[$i]['username']?></td>
                <td><?=$users[$i]['email']?></td>
                
            </tr>
        <?php } ?>  
		<tr>
			<td colspan="3" align="right">
				<a href="home.html">Go Home</a>
			</td>
		</tr>          
        </table>
</body>
</html>
