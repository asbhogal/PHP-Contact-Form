<?php
	$error = "";																								// DEFINES AND DECLARES THE VARIABLE IRRESPECTIVE OF A 'POST' SUBMISSION
	$successMessage = "";																				// DEFINES AND DECLARES THE VARIABLE BEFORE IT CAN BE PARSED A VALUE TO UPON SUCESSFUL 'POST'

	if ($_POST) {	                                             	// SERVER-SIDE VALIDATION IS RECOMMENDED, AS JS VALIDATION CAN BE TURNED OFF IN A CLIENT'S BROWSER. THIS CHECKS TO SEE FIRSTLY IF THERE ARE ANY 'POST' VARIABLES
									 
		if (!$_POST["email-address"]) {						                // ie. IF THE EMAIL ADDRESS IS EMPTY (CHECKS TO SEE IF THERE'S NO EMAIL POST VARIABLE PRESENT, OR THAT THE POST VARIABLE IS EMPTY)
			
			$error .= "An email address is required.<br>";					// APPENDING TO ERROR VARIABLE (STRING) THE FOLLOWING MESSAGE
		}
																															// REPEAT FOR THE OTHER THREE FIELDS
		if (!$_POST["subject"]) {
			
			$error .= "Please enter in a subject.<br>";							// APPENDING TO ERROR VARIABLE (STRING) THE FOLLOWING MESSAGE
		}

		if (!$_POST["message"]) {
			
			$error .= "Please enter in your message.<br>";					// APPENDING TO ERROR VARIABLE (STRING) THE FOLLOWING MESSAGE
		}

		if ($_POST["email-address"] && filter_var($_POST["email-address"], FILTER_VALIDATE_EMAIL) === false) {
			
			$error .= "Invalid email address.<br>";									// APPENDING TO ERROR VARIABLE (STRING) THE FOLLOWING MESSAGE
		}

		if ($error != "") {
			
			$error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form submission:</strong></p>' . $error . '</div>';
		
		} else {
			
			$emailTo = "example@example.com";
			
			$subject = $_POST["subject"];
			
			$message = $_POST["message"];
			
			$headers = "New message from: ".$_POST["email-address"];

			if (mail($emailTo, $subject, $message, $headers)) {
				
				$successMessage = '<div class="alert alert-success" role="alert"><p><strong>Thank you for your message! We\'ll get back to you shortly</strong></p>';
			
			} else {
				
				$error = '<div class="alert alert-danger" role="alert"><p><strong>Uh oh! Looks like we couldn\'t send your message. Please try again later, or get in touch with us at:' . ' '. $emailTo . '</strong></p>';
			
			}
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
		<!--<script src="script.js" defer></script>-->
	</head>
  <body>
		<div class="container">
			<h1>Get in touch!</h1>
			<form method="post">
			<form>
				<div class="form-field pt-2">
  				<input type="email" class="form-control" id="email-address" name="email-address" placeholder="name@example.com">
					<div id="emailHelp" class="form-text ms-2">We'll never share your email with anyone else.</div>
				</div>
				<div class="form-field pt-2">
  				<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" aria-label="input" aria-describedby="input">
				</div>
				<div class="form-field pt-2">
				  <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 100px"></textarea>
				</div>
				<div class="form-field pt-2">
			  	<button type="submit" class="btn btn-primary pt-auto">Submit</button>
				</div>
		</form>
			<div id="error-message" class="pt-2"><?php 
																							echo $error.$successMessage; 
																						?></div>								<!--THERE WILL EITHER BE A SUCCESS OR NOT, SO BOTH VARIABLES CAN BE PLACED HERE-->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>	