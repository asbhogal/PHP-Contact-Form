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
		<script src="jquery-3.6.1.min.js" defer>
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>
  </head>
  <body>
		<div class="container">
			<h1>Get in touch!</h1>

			<form>
				<div class="form-floating mb-3">
  				<input type="email" class="form-control" id="email-address" placeholder="name@example.com">
  				<label for="floatingInput">Email address</label>
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="form-floating mb-3">
  				<input type="text" class="form-control" placeholder="Subject" aria-label="input" aria-describedby="input">
					<label for="floatingInput">Subject</label>
				</div>
			  <div class="mb-3 form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">I consent for my data to be handled in accordance with GDPR guidelines</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
    <?php 
			echo '<p>Test Content</p>'; 
		?> 
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>