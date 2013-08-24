

// When user adds a device via user_home
function user_adds_device(){
	
	// Validate Form values //
	
	// Grab form values //
	
	var perfTimes = $("#addShowForm").serialize();
  	$.post("<?php echo base_url; ?>user/add_device", {name: $("#showTitle").val(), results: perfTimes },      function(data) {
    $("#addShowSuccess").empty().slideDown("slow").append(data);
	
	
	
}


// On document ready
$(document).ready(function() {
	
	
	
}
