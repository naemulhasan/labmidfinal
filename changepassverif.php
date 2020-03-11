<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rpassword']) || empty($_REQUEST['rnewpassword']) || empty($_REQUEST['rconnewpassword']) )
		{
		echo "Field Cannot Be Empty";
		header("location:Changepassword.php");

		}

	/*elseif (!preg_match("/^[a-zA-Z ]*$/",$_REQUEST['rname']) {
		echo "Not allowed";
	}*/
	else
	{

		if($_REQUEST['rnewpassword']==$_REQUEST['rconnewmpassword'])
		{
			/*$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];*/

			$name=$_REQUEST['rpassword'];
			/*if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
      			$nameErr = "Only letters and white space allowed";
    		}*/
			$id=$_REQUEST['rnewpassword'];
			$password=$_REQUEST['rconnewpassword'];
			
		
			$myfile=fopen('verify.txt','a');
			fwrite($myfile,"$password|$newpassword|$newconpassword\r\n");
			fclose($myfile);
			header("location:Login.php");
		}
		else
		{
			echo "Password Didnt Match";

		}
	}
}
else
{
	header("location:Changepassword.php");
}

?>