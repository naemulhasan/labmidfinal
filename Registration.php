<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="POST" action="reginput.php">
		<fieldset>
			<legend>
				Registration
			</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="rname"></td>
					</tr>
					<tr>
						<td>ID</td>
						<td><input type="text" name="rid"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="rpassword"></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="rconfirmpassword"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
							<input type="radio" name="gender" value="Others">Others
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Email" name="remail"></td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<td>
							<input type="Date" name="rdate">
							<!-- <input type="text" size="2" name="date">/
							<input type="text" size="2" name="month">/
							<input type="text" size="2" name="year"> -->
						</td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td>
							<select name="rbloodgroup">
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</td>
					</tr>	
					<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										<a href="Login.php">Login</a>
						</td>
						<td>
							<a href="Login.php" align="right">Back</a>
						</td>
					</tr>			
				</table> 
			
		</fieldset>
	</form>
</body>
</html>