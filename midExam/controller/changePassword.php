<?php
$currentPassword = $_POST["currentPassword"];
$newPassword = $_POST["newPassword"];
$retypePassword=$_POST["retypePassword"]
    
    
	
	
	$sql2 ="UPDATE user SET password='retypePassword' WHERE ID='$uId'";
	if(mysqli_query($conn,$sql2)){
		echo "success";
		
	}
?>

<center>
	<form action="changePassword.php">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="currentPassword"/><br />
						New Password<br />
						<input type="password" name="newPassword"/><br />
						Retype New Password<br />
						<input type="password"/>								
						<hr />
						<input type="button?id=$id" value="Change" />     
						<a href="home.html">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>