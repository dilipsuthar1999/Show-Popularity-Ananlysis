<?php
	session_start();
	$conn=new mysqli("localhost","root","","primeworld");		
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$query="SELECT username,password FROM admin where username='$_POST[email]' && password='$_POST[password]'";
       	$result=mysqli_query($conn,$query);
    	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
       	if($user)
		{
			$_SESSION['admin']=$_POST['email'];
			echo "loading...";
		}
		else
		{
			echo "Invalid User or Password !!!";
		}
	}
?>
