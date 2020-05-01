<?php
	session_start();
	$conn=new mysqli("localhost","root","","primeworld");		
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$password=md5($_POST['password']);
		$query="SELECT email,password FROM user where email='$_POST[email]' && password='$password'";
       	$result=mysqli_query($conn,$query);
    	$user=mysqli_fetch_all($result,MYSQLI_ASSOC);
       	if($user)
		{
			$_SESSION['email']=$_POST['email'];
			echo "loading...";
		}
		else
		{
			echo "Invalid User or Password !!!";
		}
	}
?>
