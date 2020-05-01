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
