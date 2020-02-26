<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	</head>
	<body>
		<form method="POST" action="logvalidation.php">

			<fieldset>
				<legend>LOGIN</legend>
				User ID<br>
				<input type="number" name="uidl" value=""><br>
				Password<br>
				<input type="password" name="upasswordl" value=""><br>
				--------------------------------------------<br>
				<input type="submit" name="submit" value="LOGIN">
				
				<u><a href="Registration.php">Register</a></u>

			</fieldset>

		</form>
	</body>
</html>