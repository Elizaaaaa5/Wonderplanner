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
	<!--	
		    // if(isset($_POST['submit'])) {
		      // $sbm = $conn->prepare("INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL, ADDRESS, CITY, STATE, ZIPCODE, PASSWORD) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		      // $hashpass = password_hash($_POST['contact_password'], PASSWORD_DEFAULT);
		      // $sbm->bind_param("ssssssss", $_POST['contact_name'], $_POST['contact_lname'], $_POST['contact_email'], $_POST['contact_address'], $_POST['contact_city'], $_POST['contact_state'], $_POST['contact_zipcode'], $hashpass);
		      // $sbm->execute();
<<<<<<< HEAD

=======
>>>>>>> d07fc77012da967ee1fcfe27a1de82577a0cfb2d

		  // }
		  //  --!>
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
						<form method="post">
							<div class="row 50%">
									<div class="6u 12u(mobile)">
										<label for="name" align="left">First Name<font color="red">*</font></label>
										<input type="text" pattern="^[a-zA-Z-]{3,}$" name="contact_name" id="contact_name" placeholder="First Name" title="First name must be at least 3 characters and may not have any special characters except '-'" required>
									</div>
									<div class="6u 12u(mobile)">
										<label for="lname" align="left">Last Name<font color="red">*</font></label>
										<input type="text"  pattern="^[a-zA-Z-]{3,}$" name="contact_lname" id="contact_lname" placeholder="Last Name" title="Last name must be at least 3 characters and may not have any special characters except '-'" required>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
										<label for="email" align="left">Email<font color="red">*</font></label>
										<input type="text"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" onchange= "validateEmail()" name="contact_email" id="contact_email" placeholder="you@example.domain" title="you@example.domain"required>
									</div>
									<?php if (isset($email_error)): ?>
										<span><?php echo $email_error; ?></span>
									<?php endif ?>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<label for="password" align="left">Password<font color="red">*</font></label>
										<input type="password"  name="contact_password" id="contact_password" placeholder="Password"
										pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one
										number and one uppercase and lowercase letter, and at least 8 or more characters" required>
									</div>
								</div>
								<div align="left">
									<input type="checkbox" id="showPwd"> Show password 
								</div>
								<br/>
								<div class="row">
									<div class="12u">
										<label for="password2" align="left">Comfirm Password<font color="red">*</font></label>
										<input type="password" name="contact_password2" id="contact_password2" onchange="validatePassword()" placeholder="Confirm Password" required>
									</div>
								</div>
								<div align="left">
									<input type="checkbox" id="showPwd2"> Show password 
								</div>
								<br/>
								<div class="row">
									<div class="12u">
										<label for="address" align="left">Address<font color="red">*</font></label>
										<input type="text" name="contact_address" id="contact_address" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*(_|[^\w])).+$" placeholder="Address"required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="city" align="left">City<font color="red">*</font></label>
										<input type="text" name="contact_city" id="contact_city" placeholder="City" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$"required>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="state" align="left">State<font color="red">*</font></label>
										<select name="contact_state" required>
											<option value=''>Choose a State</option>
										   <option value='AK'>Alaska</option>
										   <option value='AL'>Alabama</option>
										   <option value='AR'>Arkansas</option>
										   <option value='AZ'>Arizona</option>
										   <option value='CA'>California</option>
										   <option value='CO'>Colorado</option>
										   <option value='CT'>Connecticut</option>
										   <option value='DC'>District of Columbia</option>
										   <option value='DE'>Delaware</option>
										   <option value='FL'>Florida</option>
										   <option value='GA'>Georgia</option>
										   <option value='HI'>Hawaii</option>
										   <option value='IA'>Iowa</option>
										   <option value='ID'>Idaho</option>
										   <option value='IL'>Illinois</option>
										   <option value='IN'>Indiana</option>
										   <option value='KS'>Kansas</option>
										   <option value='KY'>Kentucky</option>
										   <option value='LA'>Louisiana</option>
										   <option value='MA'>Massachusetts</option>
										   <option value='MD'>Maryland</option>
										   <option value='ME'>Maine</option>
										   <option value='MI'>Michigan</option>
										   <option value='MN'>Minnesota</option>
										   <option value='MO'>Missouri</option>
										   <option value='MS'>Mississippi</option>
										   <option value='MT'>Montana</option>
										   <option value='NC'>North Carolina</option>
										   <option value='ND'>North Dakota</option>
										   <option value='NE'>Nebraska</option>
										   <option value='NH'>New Hampshire</option>
										   <option value='NJ'>New Jersey</option>
										   <option value='NM'>New Mexico</option>
										   <option value='NV'>Nevada</option>
										   <option value='NY'>New York</option>
										   <option value='OH'>Ohio</option>
										   <option value='OK'>Oklahoma</option>
										   <option value='OR'>Oregon</option>
										   <option value='PA'>Pennsylvania</option>
										   <option value='PR'>Puerto Rico</option>
										   <option value='RI'>Rhode Island</option>
										   <option value='SC'>South Carolina</option>
										   <option value='SD'>South Dakota</option>
										   <option value='TN'>Tennessee</option>
										   <option value='TX'>Texas</option>
										   <option value='UT'>Utah</option>
										   <option value='VT'>Vermont</option>
										   <option value='VA'>Virginia</option>
										   <option value='WA'>Washington</option>
										   <option value='WI'>Wisconsin</option>
										   <option value='WV'>West Virginia</option>
										   <option value='WY'>Wyoming</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="12u">
										<label for="zipcode" align="left">Zipcode<font color="red">*</font></label>
										<input type="text" name="contact_zipcode" id="contact_zipcode" placeholder="xxxxx" title="Please enter 5 digits of zipcode." pattern="^\d{5}(?:[-\s]\d{4})?$"required>
									</div>
								</div>



								<div class="row">
								<div class="12u">
									<ul class="actions">
										<!-- <li><input type="submit" class="style1" value="Sign Up Now" /></li> -->
										<button type="submit" class="style1" name="submit">Sign Up Now</button>
										<li><input type="reset" class="style2" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</article>
				</div>
				</div>
				</br>
				</br>
				</br>
				</br>
				</br>
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
					var password = document.getElementById("contact_password")
					  , confirm_password = document.getElementById("contact_password2");
					function validatePassword(){
					  if(password.value != confirm_password.value) {
					    confirm_password.setCustomValidity("Passwords Do Not Match");
					  } else {
						  confirm_password.setCustomValidity('');
					  }
					}
				</script>
				
			<script>

<<<<<<< HEAD
=======
				<script>
				var pass = document.getElementById("contact_password");
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
				
			<script>

>>>>>>> d07fc77012da967ee1fcfe27a1de82577a0cfb2d
				(function() {
				var pwd = document.getElementById("contact_password");
				var show = document.getElementById("showPwd");

				show.addEventListener("change", function() {
				 try {
					if (show.checked)
					   pwd.type ="text";
					else
					   pwd.type = "password";
				 } catch(error) {
					alert("Cannot switch type");
				 }         
				}, false);      
				}());

			</script>
			<script>
				(function() {
				var pwd = document.getElementById("contact_password2");
				var show = document.getElementById("showPwd2");

				show.addEventListener("change", function() {
				 try {
					if (show.checked)
					   pwd.type ="text";
					else
					   pwd.type = "password";
				 } catch(error) {
					alert("Cannot switch type");
				 }         
				}, false);      
				}());

			</script>
			<script>
					var user_email = document.getElementById("contact_email");
				
					function validateEmail(){
					  $user_check_query = "SELECT * FROM users WHERE contact_email='$EMAIL' LIMIT 1";
					  var result = mysqli_query('phpmyadmin', $user_check_query);
					  //$count = mysqli_num_rows($result);
					  
					  if (user_email === result) { // if user exists
						echo 'Sorry, this email is already taken!';
						}
					  }
					}
			</script>
	</body>
</html>