
<?php include('server.php') ?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wonder Planner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--===============================================================================================-->
		<!--<link rel="icon" type="image/png" href="assets/Login_v1/images/icons/favicon.ico"/>-->
		<!--===============================================================================================-->
		<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
		<!===============================================================================================-->
			<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/animate/animate.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="assets/Login_v1/css/util.css">
			<!--<link rel="stylesheet" type="text/css" href="assets/Login_v1/css/main.css">
		<!==============================================================================================-->

	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
					   <?php include("header.php");?>
					</div>
				</div>
		<div class="wrapper style2">
		<section>
				<div class="title">Sign Up</div>
				<header class="style1">
					<h2>Plan Less, Do More</h2>
					<p>Start planning your perfect day, today!</p>
				</header>
				<div class = "row">
				<div align="center">
				<article class="6u 12u(mobile) special">
					<a href="#" class="image featured"><img src="images/cafe.jpg" alt="" /></a>
				</article>
				</div>

				<div align="center">
					<article>
						<form method="post" action="#" >
							<div class="row 50%">
									<div class="6u 12u(mobile)">
										<label for="name" align="left">First Name</label>
										<input  type="text" pattern="^[a-zA-Z0-9._-]{3,}$" name="name" id="contact-name" placeholder="First Name" required>
									</div>
									<div class="6u 12u(mobile)">
										<label for="lname" align="left">Last Name</label>
										<input type="text"  pattern="^[a-zA-Z0-9._-]{3,}$" name="lname" id="contact-lname" placeholder="Last Name" required>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<label for="email" align="left">Email</label>
										<input type="text"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" name="email" id="contact-email" placeholder="Email" required>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<label for="password" align="left">Password</label>
										<input type="text"  name="password" id="contact-password" placeholder="Password"
										pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one
										number and one uppercase and lowercase letter, and at least 8 or more characters" required>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<label for="password2" align="left">Comfirm Password</label>
										<input type="text"  name="password2" id="contact-password2" onchange="validatePassword()"placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="address" align="left">Address</label>
										<input type="text" name="address" id="contact-address" pattern="/^\\d+ [a-zA-Z ]+, \\d+ [a-zA-Z ]+, [a-zA-Z ]+$/" placeholder="Address"required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="city" align="left">City</label>
										<input type="text" name="city" id="contact-city" placeholder="City" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$"required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="state" align="left">State</label>
										<input type="text" name="state" id="contact-state" placeholder="State" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$"required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="zipcode" align="left">Zipcode</label>
										<input type="text" name="zipcode" id="contact-zipcode" placeholder="Zipcode" pattern="^\d{5}(?:[-\s]\d{4})?$"required>
									</div>
								</div>



								<div class="row">
								<div class="12u">
									<ul class="actions">
										<!-- <li><input type="submit" class="style1" value="Sign Up Now" /></li> -->
										<button type="submit" class="style1" name="reg_user">Sign Up Now</button>
										<li><input type="reset" class="style2" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</article>
				</div>
				</div>
			</section>
			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
				    <?php include("footer.php");?>
				</div>

		</div>




		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/bootstrap/js/popper.js"></script>
				<script src="assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
				<script src="assets/Login_v1/vendor/select2/select2.min.js"></script>

			<!--===============================================================================================-->
				<script src="assets/Login_v1/js/main.js"></script>


				<script>
					var password = document.getElementById("contact-password")
					  , confirm_password = document.getElementById("contact-password2");
					function validatePassword(){
					  if(password.value != confirm_password.value) {
					    confirm_password.setCustomValidity("Passwords Do Not Match");
					  }
					}
				</script>

				<script>
				var pass = document.getElementById("contact-password");
				var letter = document.getElementById("letter");
				var capital = document.getElementById("capital");
				var number = document.getElementById("number");
				var length = document.getElementById("length");
				// When the user clicks on the password field, show the message box
				pass.onfocus = function() {
				  document.getElementById("message").style.display = "block";
				}
				// When the user clicks outside of the password field, hide the message box
				pass.onblur = function() {
				  document.getElementById("message").style.display = "none";
				}
				// When the user starts to type something inside the password field
				pass.onkeyup = function() {
				  // Validate lowercase letters
				  var lowerCaseLetters = /[a-z]/g;
				  if(pass.value.match(lowerCaseLetters)) {
				    letter.classList.remove("invalid");
				    letter.classList.add("valid");
				  } else {
				    letter.classList.remove("valid");
				    letter.classList.add("invalid");
				}
				  // Validate capital letters
				  var upperCaseLetters = /[A-Z]/g;
				  if(pass.value.match(upperCaseLetters)) {
				    capital.classList.remove("invalid");
				    capital.classList.add("valid");
				  } else {
				    capital.classList.remove("valid");
				    capital.classList.add("invalid");
				  }
				  // Validate numbers
				  var numbers = /[0-9]/g;
				  if(pass.value.match(numbers)) {
				    number.classList.remove("invalid");
				    number.classList.add("valid");
				  } else {
				    number.classList.remove("valid");
				    number.classList.add("invalid");
				  }
				  // Validate length
				  if(pass.value.length >= 8) {
				    length.classList.remove("invalid");
				    length.classList.add("valid");
				  } else {
				    length.classList.remove("valid");
				    length.classList.add("invalid");
				  }
				}
				</script>
	</body>
</html>
