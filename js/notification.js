$(document).ready(function() {

	var messages;
	var notificatons;

	$('body').click(function(event) {
		var elementId = event.target.id;

	    if(elementId === 'notificationLink') {
	    	showPopup(1);
	    }
	    else if (elementId === 'messageLink') {
	    	showPopup(2);
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
	});

	//Popup on click
	$("#notificationContainer").click(function() {
		return false;
	});

	//Document Click hiding the popup
	$(document).click(function() {
		$("#mesagesContainer").hide();
	});

	//Popup on click
	$("#mesagesContainer").click(function() {
		return false;
	});

	function showPopup(id) {
		if (id === 1) {
			$("#notificationContainer").fadeToggle(300);
			$("#notification_count").fadeOut("slow");
			return false;
		} else if (id === 2) {
			$("#mesagesContainer").fadeToggle(300);
			$("#message_count").fadeOut("slow");
			return false;
		}
	}

});