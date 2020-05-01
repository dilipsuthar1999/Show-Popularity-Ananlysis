function addtvshowepisode()
{
	$('#episode').submit(function()
	{
		$.ajax(
		{
			url: $(this).attr('action'),
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
	       	success: function(data)
	       	{ 		
	       		if(data=='Already this episode inserted !!!')
	       		{
	       			$("#result2").html(data);
	       		}
	       		if(data=='Successfully Added !!!')
	       		{
           			$("#episode").trigger("reset");			    
	            	$("#result2").html(data);
	       		}
	       		if(data=='Not Added !!!')
	       		{
	            	$("#result2").html(data);
       			}
       		},
       		error:function() {
        	}
    	});
		return false;
   	});
}		