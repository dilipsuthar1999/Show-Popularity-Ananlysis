function addtvshow()
{
	$('#tvshow').submit(function()
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
	       		if(data=='Already tvshow inserted !!!')
	       		{
	       			$("#result1").html(data);
	       		}
	       		if(data=='Successfully Added !!!')
	       		{
           			$("#tvshow").trigger("reset");			    
	            	$("#result1").html(data);
	       		}
	       		if(data=='Not Added !!!')
	       		{
	            	$("#result1").html(data);
       			}
       		},
       		error:function() {
        	}
    	});
		return false;
   	});
}		