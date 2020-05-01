function addmovie()
{
	$('#movie').submit(function()
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
	       		if(data=='Already movie inserted !!!')
	       		{
	       			$("#result").html(data);
	       		}
	       		if(data=='Successfully Added !!!')
	       		{
           			$("#add").trigger("reset");			    
	            	$("#result").html(data);
	       		}
	       		if(data=='Not Added !!!')
	       		{
	            	$("#result").html(data);
       			}
       		},
       		error:function() {
        	}
    	});
		return false;
   	});
}		