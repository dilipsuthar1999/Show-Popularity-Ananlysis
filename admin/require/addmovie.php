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
		        $pass[0]='MOVIE';
		    	$alphaLength=strlen($alphabet)-1;
		    	for($i=1;$i<5;$i++) 
		    	{
		        	$n=rand(0,$alphaLength);
		        	$pass[]=$alphabet[$n];
		    	}
		    	$id=implode($pass);
		    	$checkRegNum="SELECT * FROM movies WHERE movie_id='$id'";
		    	$result=mysqli_query($conn,$checkRegNum);
			    if(mysqli_num_rows($result)==0)
			    {
		        	$regenerateNumber=false; 
		    	}
			}while($regenerateNumber);


			$query="SELECT * FROM movies where movie_name='$_POST[movie_name]'";
		    $result=mysqli_query($conn,$query);
		    $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
		    if($user)
			{
				echo "Already movie inserted !!!";
			}
			else
			{
				$filename=$_FILES["image"]["name"];
				$tempname=$_FILES["image"]["tmp_name"];
				$folder="moviesimages/".$filename;
				move_uploaded_file('$tempname','$folder');
		       	$sql="INSERT INTO `movies`(`movie_id`, `movie_image`, `movie_name`, `movie_release_date`, `movie_genre`, `movie_url`, `movie_rating`, `movie_total_comments`) VALUES ('$id','$folder','$_POST[movie_name]','$_POST[date]','$_POST[genre]','$_POST[url]',0,0)";
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