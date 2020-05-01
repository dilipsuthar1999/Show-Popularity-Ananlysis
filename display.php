<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		$_SESSION['show_id']=$_GET['show_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require "require/library.php";
	?>
	<script>
		function comment()
		{
			$('#addcomment').submit(function()
			{
				$.ajax(
				{
					type: "POST",
					url: 'require/comment.php',
					data: $(this).serialize(),
					success: function(data)
					{ 		
						$("#addcomment").trigger("reset");
						$("#msg").html(data);	   		    	   
			        },
					error:function() {
				    }
				});
		    	return false;
			});
		}
	</script>
</head>
<body>
	<?php
		require "require/header.php";
	?>
	<iframe style="padding:0px 50px 0px 50px; border:none;" src="<?php echo $_GET['url']; ?>" width="100%" height="500"></iframe>

	<div id="accordion">
	  	<div class="card" style="background-color: white; border:none; padding:0px 50px 0px 50px;">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn">
		        	Add Comment
		        </button>
		      </h5>
		    </div>
		    <div class="collapse show">
		      	<div class="card-body">
					<form id="addcomment">
						<div class="input-group">
					  		<div class="input-group-prepend">
					    		<span class="input-group-text">Comment</span>
						  	</div>
							<textarea type="text" class="form-control" name="com" required=""></textarea>
							<button type="submit" name="set" value="set" onclick="comment();"><i class="material-icons" style="font-size:35px;">send</i></button>
						</div>
					</form><br>
				</div>
			</div>
		</div>
 	</div>
<?php
	$conn=new mysqli("localhost","root","","primeworld");
	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
?>
	<div style="padding: 60px;">
		<div style=" padding: 10px; border-radius:2px; width:100%; background-color: #f2f2f2;">Comments</div>
		<div style="border:1px solid #f2f2f2; padding: 20px; width:100%; height: 250px; overflow: scroll;">
	<?php
	    $query="SELECT * FROM comments where show_id='$_SESSION[show_id]'";
	    $result=mysqli_query($conn,$query);
	    $user=mysqli_num_rows($result);
	    if($user!=0)
	    {
	      	while($data=mysqli_fetch_assoc($result))
	       	{
?>
				<div style="padding-bottom:2px; border-bottom: 1px solid  #b3b3b3;">
<?php
	       		echo $data['comment'];
?>
	       		</div><br>
<?php
	       	}
	    }
	}
?>
		</div>
	</div>

	<?php
		require "require/analysis.php";
		require "require/footer.php";
	?>	
</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
