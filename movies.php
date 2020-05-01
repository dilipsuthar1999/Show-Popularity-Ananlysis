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
	        $query="SELECT * FROM movies";
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