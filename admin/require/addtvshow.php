<?php
	$conn=new mysqli("localhost","root","","primeworld");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
			$regenerateNumber=true;
			do
			{
				$alphabet='1234567890';
		    	$pass=array();
		        $pass[0]='TVSHOW';
		    	$alphaLength=strlen($alphabet)-1;
		    	for($i=1;$i<5;$i++) 
		    	{
		        	$n=rand(0,$alphaLength);
		        	$pass[]=$alphabet[$n];
		    	}
		    	$id=implode($pass);
		    	$checkRegNum="SELECT * FROM tvshows WHERE tvshow_id='$id'";
		    	$result=mysqli_query($conn,$checkRegNum);
			    if(mysqli_num_rows($result)==0)
			    {
		        	$regenerateNumber=false; 
		    	}
			}while($regenerateNumber);


			$query="SELECT * FROM tvshows where tvshow_name='$_POST[tvshow_name]'";
		    $result=mysqli_query($conn,$query);
		    $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
		    if($user)
			{
				echo "Already tvshow inserted !!!";
			}
			else
			{
				$filename=$_FILES["image"]["name"];
				$tempname=$_FILES["image"]["tmp_name"];
				$folder="tvshowsimages/".$filename;
				move_uploaded_file('$tempname','$folder');
		       	$sql="INSERT INTO `tvshows`(`tvshow_id`, `tvshow_image`, `tvshow_name`, `tvshow_starting_date`, `tvshow_genre`, `tvshow_episodes`, `tvshow_rating`, `tvshow_total_comments`) VALUES ('$id','$folder','$_POST[tvshow_name]','$_POST[date]','$_POST[genre]',0,0,0)";
				if($conn->query($sql))
				{
					echo "Successfully Added !!!";
		   		}
		   		else
		  		{
		   			echo "Not Added !!!";
		   		}
		 	}
	}
?>