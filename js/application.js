
$(document).ready(function() {
	initializeForm();
});

function initializeForm() {
	//hide all error/success notifications
	$("p.notification").hide();
	//send the ajax request to processform via http post
	$("#submit").click(function () {
		$.post("ajaxhandlers/processform.php", {
				'name' : $("#name").val(),
				'email': $("#email").val(),
				'phone': $("#phone").val()
			}, function(data, textStatus) {
				if (data['success']) { //the data validated, say thanks
					$("#submit").attr("disabled", "true");
					$("p.notification").hide('fast');
					$("p#success-message").show();
				} else { //problem, show the correct error message

          //slide up/down error messages based on validation rules
          var fields = new Array( 'name', 'email', 'phone' );
          for(i in fields) {
            var field = fields[i];
            if (data[field + '-error'] == 'error') {
              $("p#" + field + "-error").slideDown('fast');
            } else {
              $("p#" + field + "-error").slideUp('fast');
            }
          }

				}
			}, "json");
		return false;
	});	
}
