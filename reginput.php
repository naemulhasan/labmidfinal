<?php

session_start();

if(isset($_REQUEST['submit']))
{
	$id=$_REQUEST['uidl'];
	$password=$_REQUEST['upasswordl'];
	$cpassword=$_REQUEST['cupassword'];
	$name=$_REQUEST['uname'];
	$usertype=$_REQUEST['usertype'];

	if(empty(trim($id))|| empty(trim($password)||empty(trim($cpassword)||empty(trim($name)||empty(trim($usertype)))
	{
		echo "Null submission found!";
	}
	else
	{
				
			}else
			{
				echo "invalid uname/password";
			}
	}
}

?>