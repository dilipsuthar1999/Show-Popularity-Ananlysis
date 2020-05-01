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