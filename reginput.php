<?php

if(isset($_REQUEST['submit']))
{
	if(empty($_REQUEST['rname']) || empty($_REQUEST['rid']) || empty($_REQUEST['rpassword']) || empty($_REQUEST['rconfirmpassword']) || empty($_REQUEST['gender']) || empty($_REQUEST['remail'])||empty($_REQUEST['rdate'])|| empty($_REQUEST['rbloodgroup']) )
		{
		echo "Field Cannot Be Empty";
		header("location:Registration.php");

		}

	/*elseif (!preg_match("/^[a-zA-Z ]*$/",$_REQUEST['rname']) {
		echo "Not allowed";
	}*/
	else
	{

		if($_REQUEST['rpassword']==$_REQUEST['rconfirmpassword'])
		{
			/*$data=$_REQUEST['date'];
			$data.=$_REQUEST['month'];
			$data.=$_REQUEST['year'];*/

			$name=$_REQUEST['rname'];
			/*if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
      			$nameErr = "Only letters and white space allowed";
    		}*/
			$id=$_REQUEST['rid'];
			$password=$_REQUEST['rpassword'];
			$gender=$_REQUEST['gender'];
			$email=$_REQUEST['remail'];
			
			$dob=$_REQUEST['rdate'];
			$bg=$_REQUEST['rbloodgroup'];
		
			$myfile=fopen('verify.txt','a');
			fwrite($myfile,"$name|$id|$password|$gender|$email|$dob|$bg\r\n");
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
	header("location:Registration.php");
}

?>