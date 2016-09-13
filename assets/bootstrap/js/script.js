$(document).ready(function () {
	 
	window.setTimeout(function() {
	    $("#alert-message").fadeTo(1000, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 8000);
	 
	});