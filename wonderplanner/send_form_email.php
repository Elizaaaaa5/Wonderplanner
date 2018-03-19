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
		
		<br/>
		<section align="center">
				<div class="title">Thank you!</div>
				
			
			<?php
				if(isset($_POST['email'])) {
				 
					// EDIT THE 2 LINES BELOW AS REQUIRED
					$email_to = "wonderplannerofficial@gmail.com";
					$email_subject = "A message from Wonder Planner user";
				 
					function died($error) {
						// your error code can go here
						echo "We are very sorry, but there were error(s) found with the form you submitted. ";
						echo "These errors appear below.<br /><br />";
						echo $error."<br /><br />";
						echo "Please go back and fix these errors.<br /><br />";
						die();
					}
				 
				 
					// validation expected data exists
					if(!isset($_POST['name']) ||
						!isset($_POST['email']) ||
						!isset($_POST['message'])) {
						died('We are sorry, but there appears to be a problem with the form you submitted.');       
					}
				 
					 
				 
					$name = $_POST['name']; // required
					$email_from = $_POST['email']; // required
					$message = $_POST['message']; // required
				 
					$error_message = "";
					$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
				 
				  if(!preg_match($email_exp,$email_from)) {
					$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
				  }
				 
					$string_exp = "/^[A-Za-z .'-]+$/";
				 
				  if(!preg_match($string_exp,$name)) {
					$error_message .= 'The name you entered does not appear to be valid.<br />';
				  }
				 
				 
				  if(strlen($message) < 2) {
					$error_message .= 'The message you entered do not appear to be valid.<br />';
				  }
				 
				  if(strlen($error_message) > 0) {
					died($error_message);
				  }
				 
					$email_message = "Message details below.\n\n";
				 
					 
					function clean_string($string) {
					  $bad = array("content-type","bcc:","to:","cc:","href");
					  return str_replace($bad,"",$string);
					}
				 
					 
				 
					$email_message .= "Name: ".clean_string($name)."\n";
					$email_message .= "Email: ".clean_string($email_from)."\n";
					$email_message .= "Message: ".clean_string($message)."\n";
				 
				// create email headers
				$headers = 'From: '.$email_from."\r\n".
				'Reply-To: '.$email_from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
				@mail($email_to, $email_subject, $email_message, $headers);  
				?>
				 
				<!-- include your own success html here -->
				 
				<header class="style1"><h2>Thank you for contacting us. <br/> We will be in touch with you very soon at <br/><font color="#39A6A8"><?php echo ($_POST['email']);?>!<h2></header>
				 
				<?php
				 
				}
				?>
				</div>

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
			<script type="text/javascript">
				// function the_function(){
						// $.ajax({
							// type: 'POST',
							// url: 'server.php',
							// success: function(checkemail) {
								// alert("This email is already registered.");
								// $("p").text(checkemail);

							// }
						// }
				// )};
				
				//  checks if the email is in use 
				
				
			</script>

	</body>
</html>
