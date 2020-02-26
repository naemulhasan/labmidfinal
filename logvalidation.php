<?php

session_start();

if(isset($_REQUEST['submit']))
{
	$id=$_REQUEST['uidl'];
	$password=$_REQUEST['upasswordl'];

	if(empty(trim($id))|| empty(trim($password)))
	{
		echo "Null submission found!";
	}
	else
	{
		$file=fopen('verify.txt','r');
		$user=fread($file,filesize('verify.txt'));
		$data=explode('|', $user);


			if( trim($data[0]) == $id && trim($data[1]) == $password)
			{
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;
				if(trim ($data[2]=='admin'))
				{
					header("location: Admin.php");

				}
				else
				{
					header("location: User.php");
				}
				

				
			}else
			{
				echo "invalid uname/password";
			}
	}
}

?>