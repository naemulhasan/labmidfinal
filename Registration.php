<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGRISTRATION</title>

	</head>
	<body>

		<form>
			<fieldset>
				<legend>REGISTRATION</legend>
				ID<br>
				<input type="number" name="uid" value=""><br>
				Pssword<br>
				<input type="password" name="upassword"><br>
				Confirm Password<br>
				<input type="password" name="cupassword"><br>
				Name<br>
				<input type="text" name="uname"><br>
				User type<br>
				--------------------------------------------------<br>
				<input type="radio" name="usertype">User
				<input type="radio" name="usertype">Admin<br>
				--------------------------------------------------<br>

				<input type="submit" name="submit" value="Sing Up">
				<u><a href="Login.php">Sign In</a></u>

				

			</fieldset>
	</body>
</html>


