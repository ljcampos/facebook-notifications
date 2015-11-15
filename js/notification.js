$(document).ready(function() {

	var messages;
	var notificatons;
	var notificationStatus = false;
	var messageStatus = false;

	$('body').click(function(event) {
		var elementId = event.target.id;

	    if(elementId === 'notificationLink') {
	    	$("#mesagesContainer").hide();
	    	$("#solicitudContainer").hide();
	    	$("#notificationContainer").fadeToggle(300);
			$("#notification_count").fadeOut("slow");
			return false;
	    }
	    else if (elementId === 'messageLink') {
	    	$("#notificationContainer").hide();
	    	$("#solicitudContainer").hide();
	    	$("#mesagesContainer").fadeToggle(300);
	    	$("#message_count").fadeOut("slow");
	    	return false;
	    }
	    else if (elementId === 'solicitudLink') {
	    	$("#notificationContainer").hide();
	    	$("#mesagesContainer").hide();
	    	$("#solicitudContainer").fadeToggle(300);
	    	$("#solicitud_count").fadeOut("slow");
	    	return false;
	    }
	});

	/*$("#notificationLink").click(function() {
		$("#notificationContainer").fadeToggle(300);
		$("#notification_count").fadeOut("slow");
		return false;
	});*/

	//Document Click hiding the popup
	$(document).click(function() {
		$("#notificationContainer").hide();
		$("#mesagesContainer").hide();
		$("#solicitudContainer").hide();
	});

	//Popup on click
	$("#notificationContainer").click(function() {
		return false;
	});

	$("#mesagesContainer").click(function() { 
		return false;
	});

	$("#solicitudContainer").click(function() { 
		return false;
	});

});