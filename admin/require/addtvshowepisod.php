<?php
	$conn=new mysqli("localhost","root","","primeworld");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		$query="SELECT * FROM episodes where tvshow_name='$_POST[tvshow_name]' AND title='$_POST[episode_number]'";
	    $result=mysqli_query($conn,$query);
	    $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
	    if($user)
		{
			echo "Already this episode inserted !!!";
		}
		else
		{
	        $query1="SELECT * FROM tvshows where tvshow_name='$_POST[tvshow_name]'";
	        $result1=mysqli_query($conn,$query1);
	        $user1=mysqli_num_rows($result1);
	        if($user1!=0)
	        {
	          	while($data1=mysqli_fetch_assoc($result1))
	          	{
					$id=$data1['tvshow_id'];
					$t0=$data1['tvshow_episodes'];
	        	}
	        }
	        $t=$t0+1;
	       	$sql="INSERT INTO `episodes`(`tvshow_id`, `tvshow_name`, `season`, `title`, `episode_date`, `episode_url`) VALUES ('$id','$_POST[tvshow_name]','$_POST[season_number]','$_POST[episode_number]','$_POST[date]','$_POST[url]')";
			if($conn->query($sql))
			{
				echo "Successfully Added !!!";
				$sql1="UPDATE tvshows SET tvshow_episodes='$t' where tvshow_id='$id'";
				if($conn->query($sql1))
				{}
	   		}
	   		else
	  		{
	   			echo "Not Added !!!";
	   		}
		}
	}
?>