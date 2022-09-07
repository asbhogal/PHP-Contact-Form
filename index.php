<?php
	if ($_POST) {	// SERVER-SIDE VALIDATION IS RECOMMENDED, AS JS VALIDATION CAN BE TURNED OFF IN A CLIENT'S BROWSER. THIS CHECKS TO SEE FIRSTLY IF THERE ARE ANY 'POST' VARIABLES
		
		$error = "";
							 
		if (!$_POST["email-address"]) {													// ie. IF THE EMAIL ADDRESS IS EMPTY (CHECKS TO SEE IF THERE'S NO EMAIL POST VARIABLE PRESENT, OR THAT THE POST VARIABLE IS EMPTY)
			$error .= "An email address is required.<br>"					// APPEND THE FOLLOWING MESSAGE
		}
																														// REPEAT FOR THE OTHER THREE FIELDS
		if (!$_POST["subject"]) {
			$error .= "Please enter in a subject.<br>"
		}

		if (!$_POST["message"]) {
			$error .= "Please enter in your message.<br>"
		}

		if (filter_var($_POST["email-address"], FILTER_VALIDATE_EMAIL) === false) {
			$error .= "Invalid email address"
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
		<!-- BOOTSTRAP CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css">
		<!-- JQUERY SCRIPT -->
		<script src="src/jquery-3.6.1.min.js" defer></script>
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>
  	<!-- MAIN SCRIPT -->
		<script src="script.js" defer></script>
	</head>
  <body>
		<div class="container">
			<h1>Get in touch!</h1>
			<form method="post">
			<form>
				<div class="form-floating mb-3">
  				<input type="email" class="form-control" id="email-address" name="email-address" placeholder="name@example.com">
  				<label for="email">Email address</label>
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="form-floating mb-3">
  				<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" aria-label="input" aria-describedby="input">
					<label for="subject">Subject</label>
				</div>
				<div class="form-floating">
				  <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 100px"></textarea>
				  <label for="content">Please enter your comment</label>
				</div>
				<div class="pt-3">
			  	<button type="submit" class="btn btn-primary pt-auto">Submit</button>
				</div>
		</form>
			<div id="error-message"></div>
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>