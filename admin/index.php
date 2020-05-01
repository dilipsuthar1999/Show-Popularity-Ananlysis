<!DOCTYPE html>
<html>
	<?php
		require 'require/library.php'
	?>
	<style type="text/css">
		body
		{
			background-color: #00001a;
		}
	</style>
	<script>
		function adminlogin()
		{
			$('#login').submit(function()
			{
				$.ajax(
				{
					type: "POST",
					url: 'require/adminlogin.php',
					data: $(this).serialize(),
					success: function(data)
					{ 		
						if(data=='loading...')
						{
							$("#login").trigger("reset");
							$("#loginmsg").html(data);
							window.location='home.php';
						}
						if(data=='Invalid User or Password !!!')
						{
							$("#loginmsg").html(data);	   		    	   
						}
			        },
					error:function() {
				    }
				});
		    	return false;
			});
		}
	</script>

<body>
	<div style="width:30%; margin:100px auto 0px; border: 1px solid #999999; border-bottom: none; border-radius: 10px 10px 0px 0px; height: 50px; font-size: 30px; padding: 5px; background-color: #f2f2f2;">
		<center>ADMIN</center>
	</div>
   	<div class="modal-body" style="width:30%; margin: 0px auto 0px; border: 1px solid #999999; border-radius:0px 0px 10px 10px; background-color: white;">
		<form id="login"> 
		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Email</label>
		    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputPassword1">Password</label>
		    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="">
		  	</div>
		  	<button type="submit" class="btn btn-primary" onclick="adminlogin();">Submit</button>
    		</form><br>
		<div class="alert alert-info text-center" id="loginmsg"></div>
  	</div>
</body>
</html>
