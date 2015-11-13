$(document).ready(function()
{
$("#messageLink").click(function()
{
$("#mesagesContainer").fadeToggle(300);
$("#message_count").fadeOut("slow");
return false;
});

//Document Click hiding the popup
$(document).click(function()
{
$("#mesagesContainer").hide();
});

//Popup on click
$("#mesagesContainer").click(function()
{
return false;
});

});