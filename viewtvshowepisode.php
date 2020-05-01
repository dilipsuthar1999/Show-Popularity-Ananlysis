<?php
	session_start();
	if(isset($_SESSION['email']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require "require/library.php";
	?>
</head>
<body>
	<?php
		require "require/header.php";
	?>
	<h1 style="padding: 20px;">TV Show</h1>
	<div class="row" style="padding: 5px;">
	<?php
		$conn=new mysqli("localhost","root","","primeworld");
		if(mysqli_connect_error())
		{
			die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
		}
		else
		{
	        $query="SELECT * FROM tvshows where tvshow_id='$_GET[tvshow_id]'";
	        $result=mysqli_query($conn,$query);
	        $user=mysqli_num_rows($result);
	        if($user!=0)
	        {
	          	while($data=mysqli_fetch_assoc($result))
	          	{
	          		echo "	
						<div class='column'>
					        <div class='card'>
				            	<img src='admin/".$data['tvshow_image']."'><br>
					        </div>
				       	</div>
				       	<div class='column' style='padding:30px 0px 0px 25px;'>	
				       		<h4 style='padding:5px;'>
					       		".$data['tvshow_name']."<br>
					       	</h4>
					       	<h4 style='padding:5px;'>
					       		".$data['tvshow_starting_date']."<br>
					       	</h4>
					       	<h4 style='padding:5px;'>
					       		Total Episodes <i style='color:#ff9900; padding: 10px;'>".$data['tvshow_episodes']."</i><br>
					       	</h4>
					       	<h4 style='padding:5px;'>
					       		Total Comments <i style='color:#ff9900; padding: 10px;'>".$data['tvshow_total_comments']."</i><br>
					       	</h4>
					       	<h4 style='padding:5px;'>
					       		Rating <i class='fas fa-star' style='color:#ff9900; padding: 10px;'> ".$data['tvshow_rating']."</i>
				       		</h4>
				       	</div>";
	          	}
	        }
	?>
	</div>
	<h2 style="padding: 20px;">Episodes</h2>	
	<div class="row" style="padding: 5px;">
	<?php
			$c=0;
	        $query1="SELECT * FROM episodes where tvshow_id='$_GET[tvshow_id]'";
	        $result1=mysqli_query($conn,$query1);
	        $user1=mysqli_num_rows($result1);
	        if($user1!=0)
	        {
	          	while($data1=mysqli_fetch_assoc($result1))
	          	{
	          		$c=$c+1;
					echo "
					<div class='column'>
			        	<div class='card'>
			            	<a href='display.php ? show_id=".$data1['tvshow_id']." & url=".$data1['episode_url']."' class='a'>
			            		<h1 style='color:#FFFFFF; padding:30px 0px 30px 0px;'>E".$c."<h1>
			            	</a>
			        	</div>
			        </div>";
	        	}
	        }
	    }
	?>
	</div>
</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>