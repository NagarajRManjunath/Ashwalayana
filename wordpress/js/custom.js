/*Scroll page*/
function changeSection(sectionID) {
    $('html,body').animate({
    	scrollTop: $("#" + sectionID).offset().top
	},'slow');
  }

  function messageDisplay(messageType) {
  	if(messageType=="not_success")
  		$('#message_display').html('<strong>Success!</strong>Mail is sent to admin.');
    else
      $('#message_display').html('<strong>Error!</strong>Please try after some time');
	 $('#message_display').show()
    setTimeout(function(){ $('#message_display').html(""); $('#message_display').hide()}, 3000); 
  }