<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require "require/library.php";
	?>
	<style>
		body
		{
			background-color: #00001a;
		}
		.contain
		{
			border: 1px solid #737373;
			padding: 10px;
			border-radius: 10px;
			font-size: 75px;
			text-align: center;
			color:#737373;
			float: left;
			margin: 20px;
		}
		.contain:hover
		{
			background-color: #a6a6a6;
			color:white;
		}
	</style>	
</head>
<body>
	<?php
		require "require/header.php";
	?>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content" >
		      	<div class="modal-header">
		      		<h style="font-size: 25px;">Add Movie</h>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
					<form id="movie" action="require/addmovie.php" method="POST" enctype="multipart/form-data">  
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text">Upload</span>
						  	</div>
						  	<div class="custom-file">
						    	<input type="file" class="custom-file-input" id="inputGroupFile01" name="image" required="">
						    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						  	</div>
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Movie Name</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="movie_name" required="">
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Date</span>
						  	</div>
						  	<input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="date" required="">
						</div>
					  	<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<label class="input-group-text" for="inputGroupSelect01">Genre</label>
						  	</div>
						  	<select class="custom-select" id="inputGroupSelect01" name="genre" required="">
						    	<option value="">Choose...</option>
						    	<option value="Horror">Horror</option>
						    	<option value="Advanture">Advanture</option>
						    	<option value="Science fiction">Science fiction</option>
						    	<option value="Action">Action</option>
						    	<option value="Drama">Drama</option>
						    	<option value="Biographical">Biographical</option>
						    	<option value="Comedy">Comedy</option>
						    	<option value="Thriller">Thriller</option>
						  	</select>
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">URL</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="url" required="">
						</div>
					  	<button type="submit" class="btn btn-primary" onclick="addmovie();">Submit</button>
		    		</form><br>
	    			<div class="alert alert-info text-center" id="result"></div>
		    	</div>
		  	</div>
	  	</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content" >
		      	<div class="modal-header">
		      		<h style="font-size: 25px;">Add TV Show</h>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
					<form id="tvshow" action="require/addtvshow.php" method="POST" enctype="multipart/form-data">  
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text">Upload</span>
						  	</div>
						  	<div class="custom-file">
						    	<input type="file" class="custom-file-input" id="inputGroupFile01" name="image" required="">
						    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						  	</div>
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">TV Show Name</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="tvshow_name" required="">
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Date</span>
						  	</div>
						  	<input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="date" required="">
						</div>
					  	<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<label class="input-group-text" for="inputGroupSelect01">Genre</label>
						  	</div>
						  	<select class="custom-select" id="inputGroupSelect01" name="genre" required="">
						    	<option value="">Choose...</option>
						    	<option value="Horror">Horror</option>
						    	<option value="Advanture">Advanture</option>
						    	<option value="Science fiction">Reality Television</option>
						    	<option value="Talent Show">Talent Show</option>
						    	<option value="Action">Game Show</option>
						    	<option value="Drama">Drama</option>
						    	<option value="Biographical">Biographical</option>
						    	<option value="Comedy">Comedy</option>
						    	<option value="Thriller">Thriller</option>
						  	</select>
						</div>
					  	<button type="submit" class="btn btn-primary" onclick="addtvshow();">Submit</button>
		    		</form><br>
	    			<div class="alert alert-info text-center" id="result1"></div>
		    	</div>
		  	</div>
	  	</div>
	</div>

	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content" >
		      	<div class="modal-header">
		      		<h style="font-size: 25px;">Add TV Show Episode</h>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
					<form id="episode" action="require/addtvshowepisod.php" method="POST" enctype="multipart/form-data">  
					  	<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<label class="input-group-text" for="inputGroupSelect01">TV Show Name</label>
						  	</div>
						  	<select class="custom-select" id="inputGroupSelect01" name="tvshow_name" required="">
						    	<option value="">Choose...</option>
						    	<?php
						    			$conn=new mysqli("localhost","root","","primeworld");
										if(mysqli_connect_error())
										{
											die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
										}
										else
										{
									        $query1="SELECT * FROM tvshows";
									        $result1=mysqli_query($conn,$query1);
									        $user1=mysqli_num_rows($result1);
									        if($user1!=0)
									        {
									          	while($data1=mysqli_fetch_assoc($result1))
									          	{ ?>
							    	<option value="<?php echo $data1['tvshow_name']; ?>"><?php echo $data1['tvshow_name']; ?></option>
							    				<?php }
							    			}
							    		}
							    ?>
							</select>
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Season</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="season_number" required="">
						</div>						
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Title</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="episode_number" required="">
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">Date</span>
						  	</div>
						  	<input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="date" required="">
						</div>
						<div class="input-group mb-3">
						  	<div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon3">URL</span>
						  	</div>
						  	<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="url" required="">
						</div>
					  	<button type="submit" class="btn btn-primary" onclick="addtvshowepisode();">Submit</button>
		    		</form><br>
	    			<div class="alert alert-info text-center" id="result2"></div>
		    	</div>
		  	</div>
	  	</div>
	</div>	

	<div style="padding: 50px;">
<?php
	$conn=new mysqli("localhost","root","","primeworld");

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
			$query0="SELECT count(user_id) FROM user";
		    $result0=mysqli_query($conn,$query0);
		    $row0=mysqli_fetch_array($result0);
	?>
		<div class="contain">
			<?php echo $row0[0]; ?>
			<b style="font-size: 20px;">Total Users</b>
		</div>
	<?php
			$query1="SELECT count(movie_id) FROM movies";
		    $result1=mysqli_query($conn,$query1);
		    $row1=mysqli_fetch_array($result1);
	?>
		<div class="contain">
			<?php echo $row1[0]; ?>
			<b style="font-size: 20px;">Total Movies</b>
		</div>
	<?php
			$query2="SELECT count(tvshow_id) FROM tvshows";
		    $result2=mysqli_query($conn,$query2);
		    $row2=mysqli_fetch_array($result2);
	?>
		<div class="contain">
			<?php echo $row2[0]; ?>
			<b style="font-size: 20px;">Total TV Shows</b>
		</div>	

	<?php
			$query3="SELECT count(comment) FROM comments";
		    $result3=mysqli_query($conn,$query3);
		    $row3=mysqli_fetch_array($result3);
	?>
		<div class="contain">
			<?php echo $row3[0]; ?>
			<b style="font-size: 20px;">Total Comments</b>
		</div>
	</div>
</body>
</html>
<?php
		}
	}
	else
	{
		header('location:index.php');
	}
?>