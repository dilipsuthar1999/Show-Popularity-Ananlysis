<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		require "require/library.php";
	?>
	<script>
		function userlogin()
		{
			$('#login').submit(function()
			{
				$.ajax(
				{
					type: "POST",
					url: 'require/userlogin.php',
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

		function userlogup()
		{
			$('#logup').submit(function()
			{
				$.ajax(
				{
					type: "POST",
					url: 'require/userlogup.php',
					data: $(this).serialize(),
					success: function(data)
					{ 		
						if(data=='Successfully Created !!!')
						{
							$("#logup").trigger("reset");
						   	$("#logupmsg").html(data);
						}
						if(data=='Already Exist !!!')
						{
							$("#logupmsg").html(data);	
						}
						if(data=='Not Created !!!')
						{
							$("#logupmsg").html(data);	
						}
						if(data=='Age Should Be 18 or Above')
						{
							$("#logupmsg").html(data);
						}
						if(data=='Both Password is Not Same')
						{
							$("#logupmsg").html(data);
						}
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<img src="image/logo.png" class="navbar-brand">
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	       	</ul>	       	
   	    	<div style="padding: 30px;">
		    	<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class='far fa-user'></i> Sign In</button>
		    </div>
   	    	<div style="padding: 30px;">
		    	<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class='far fa-user'></i> Sign Up</button>
		    </div>
		</div>
	</nav>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content" >
		      	<div class="modal-header">
		      		<h style="font-size: 25px;">User Sign In</h>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
					<form id="login"> 
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Email</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword1">Password</label>
					    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="">
					  	</div>
					  	<button type="submit" class="btn btn-primary" onclick="userlogin();">Submit</button>
		    		</form><br>
	    			<div class="alert alert-info text-center" id="loginmsg"></div>
		    	</div>
		  	</div>
	  	</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content" >
		      	<div class="modal-header">
		      		<h style="font-size: 25px;">User Sign Up</h>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<div class="modal-body">
					<form id="logup">
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Email</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword1">Password</label>
					    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword2">Confirm Password</label>
					    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Same Password" name="cpassword" required="">
					  	</div>
				    	<label>Gender</label>
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="defaultGroupExample1" name="gender" value="male" required="">
						  	<label class="custom-control-label" for="defaultGroupExample1">Male</label>
						</div>
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="defaultGroupExample2" name="gender" value="female" required="">
						  	<label class="custom-control-label" for="defaultGroupExample2">Female</label>
						</div>
						<div class="custom-control custom-radio">
						  	<input type="radio" class="custom-control-input" id="defaultGroupExample3" name="gender" value="other" required="">
						  	<label class="custom-control-label" for="defaultGroupExample3">Other</label>
						</div>
					  	<div class="form-group"></div>
					  	<div class="form-group">
					    	<label for="exampleInputage">Age</label>
					    	<input type="number" class="form-control" id="exampleInputage" placeholder="Age" name="age" required="">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputage">Country</label>
						  	<select class="custom-select" id="inputGroupSelect01" name="country" required="">
						        <option value="0">Choose...</option>
						        <option value="India">India</option>
						        <option value="America">America</option>
						        <option value="China">China</option>
						        <option value="Japan">Japan</option>
						        <option value="Australia">Australia</option>
						        <option value="Sri Lanka">Sri Lanka</option>
					      	</select>
					    </div>
					  	<button type="submit" class="btn btn-primary" onclick="userlogup();">Submit</button>
		    		</form><br>
	    			<div class="alert alert-info text-center" id="logupmsg"></div>
		    	</div>
		  	</div>
	  	</div>
	</div>
</body>
</html>
<?php
	}
	else
	{
		header('location:home.php');
	}
?>