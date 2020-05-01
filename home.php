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
		require "require/slider.php";
	?>
	<h1 style="padding: 20px;">Movies</h1>
	<div class="row" style="padding: 5px;">
	<?php
		$conn=new mysqli("localhost","root","","primeworld");
		if(mysqli_connect_error())
		{
			die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
		}
		else
		{
	        $query="SELECT * FROM movies ORDER BY movie_rating ASC LIMIT 1,4";
	        $result=mysqli_query($conn,$query);
	        $user=mysqli_num_rows($result);
	        if($user!=0)
	        {
	          	while($data=mysqli_fetch_assoc($result))
	          	{
					echo "
					<div class='column'>
			        	<div class='card'>
			            	<a href='display.php ? show_id=".$data['movie_id']." & url=".$data['movie_url']."' class='a'>
			            		<img src='admin/".$data['movie_image']."'><br>
		    	        		<div style='float:left; padding-left: 10px; color: #ff9900;'>Rating</div>
			            		<i class='fas fa-star' style='color:#ff9900; float:right; padding: 10px;'> ".$data['movie_rating']."</i>
			            	</a>
			        	</div>
			        </div>";
	        	}
	        }
	       ?>
	   	<div class="column">
	   		<div class="card" style="background-color: white; border:1px solid white;">
	    	   	<a href="movies.php" class="a">
    	       		<i class="fas fa-chevron-circle-right" style="font-size: 100px; margin-top: 35%;"></i><br><h2>More</h2>
	           	</a>
        	</div>
  		</div>
	</div>
	<h1 style="padding: 20px;">TV Shows</h1>
	<div class="row" style="padding: 5px;">
	<?php
	        $query1="SELECT * FROM tvshows ORDER BY tvshow_rating ASC LIMIT 1,4";
	        $result1=mysqli_query($conn,$query1);
	        $user1=mysqli_num_rows($result1);
	        if($user1!=0)
	        {
	          	while($data1=mysqli_fetch_assoc($result1))
	          	{
					echo "
					<div class='column'>
			        	<div class='card'>
			            	<a href='viewtvshowepisode.php ? tvshow_id=".$data1['tvshow_id']."' class='a'>
			            		<img src='admin/".$data1['tvshow_image']."'><br>
		    	        		<div style='float:left; padding-left: 10px; color: #ff9900;'>Rating</div>
			            		<i class='fas fa-star' style='color:#ff9900; float:right; padding: 10px;'> ".$data1['tvshow_rating']."</i>
			            	</a>
			        	</div>
			        </div>";
	        	}
	        }
	    }
	?>
	   	<div class="column">
	   		<div class="card" style="background-color: white; border:1px solid white;">
	    	   	<a href="tvshows.php" class="a">
    	       		<i class="fas fa-chevron-circle-right" style="font-size: 100px; margin-top: 35%;"></i><br><h2>More</h2>
	           	</a>
        	</div>
  		</div>
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