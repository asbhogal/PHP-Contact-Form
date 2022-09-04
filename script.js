$("form").submit(function (e) {
	e.preventDefault();

	var error = "";

	if ($("#email-address").val() == "") {
		error += "<li>Please enter your email address.</li>";
	}
	
	if ($("#message").val() == "") {
		error += "<li>Please enter your message.</li>";
	}

	if ($("#subject").val() == "") {
		error += "<li>Please enter in a subject.</li>";
	}

	if (error != "") {
		$("#error-message").html('<div class="alert alert-danger" role="alert"> <strong>There were errors in the form submission:</strong>' + error + '</div>');
	} else {
		$("form").off("submit").submit();
	}

});