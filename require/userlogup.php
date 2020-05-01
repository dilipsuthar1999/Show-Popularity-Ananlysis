<?php
	$conn=new mysqli("localhost","root","","primeworld");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		if($_POST['password']==$_POST['cpassword'])
		{
			if($_POST['age']>=18)
			{
				$regenerateNumber=true;
				do
				{
					$alphabet='1234567890';
			    	$pass=array();
			        $pass[0]='USER';
			    	$alphaLength=strlen($alphabet)-1;
			    	for($i=1;$i<5;$i++) 
			    	{
			        	$n=rand(0,$alphaLength);
			        	$pass[]=$alphabet[$n];
			    	}
			    	$userid=implode($pass);
			    	$checkRegNum="SELECT * FROM user WHERE user_id='$userid'";
			    	$result=mysqli_query($conn,$checkRegNum);
				    if(mysqli_num_rows($result)==0)
				    {
			        	$regenerateNumber=false; 
			    	}
				}while($regenerateNumber);

				$query="SELECT * FROM user where email='$_POST[email]'";
			    $result=mysqli_query($conn,$query);
			    $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
			    if($user)
				{
					echo "Already Exist !!!";
				}
				else
				{
					$password=md5($_POST['password']);
			       	$sql="INSERT INTO `user`(`user_id`, `email`, `password`, `age`, `gender`, `location`) VALUES ('$userid','$_POST[email]','$password','$_POST[age]','$_POST[gender]','$_POST[country]')";
					if($conn->query($sql))
					{
						echo "Successfully Created !!!";
			   		}
			   		else
			  		{
			   			echo "Not Created !!!";
			   		}
			   	}
	 		}
	 		else
			{
			   	echo "Age Should Be 18 or Above";
			}
	   	}
	   	else
	   	{
	   		echo "Both Password is Not Same";
	   	}
	}
?>