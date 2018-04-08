<?php include('server_login.php') ?>
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
		<!--===============================================================================================-->
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
		<!--===============================================================================================-->

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
				<div class="title">Member Log In</div>
				<header class="style1">
					<h2>Glad to see you again!</h2>
				</header>
				<div class = "row">
				<div align="center">
				<article class="8u 24u(mobile) special">
					<a href="#" class="image featured"><img src="images/romdate.jpg" alt="" /></a>
				</article>
				</div>
				<div align="center">
					<article>
						<form method="post" action="session-set.php">
								<div class="row">
									<div class="12u">
										<input type="text" name="email" id="contact-email" placeholder="Email" />
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="password" name="password" id="contact-password" placeholder="Password" />
									</div>
								</div>
								<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="style1" value="Log in" /></li>
										<li><input type="reset" class="style2" value="Forgot username/password?" /></li>
									</ul>
								</div>
							</div>
						</form>
					</article>
				</div>
				</div>
			</section>

			<?php
				if(isset($_SESSION['login_user'])){
					header("location: Our_products.php");
				}
				
				
				if(($_POST(['submit']))){
					session-start();
				
				$error='';
					if(empty($_POST['contact-email']) || empty($_POST['contact-password'])){
						
						$error = "There was an issue logging in. Please try again.";
					}else{
					$EMAIL = $_POST['contact_email'];
					$PASSWORD = $_POST['contact_password'];

					$EMAIL = stripslashes($EMAIL);
					$PASSWORD = password_hash($PASSWORD);
					$EMAIL = mysql_real_escape_string($EMAIL);
					$PASSWORD = mysql_real_escape_string($PASSWORD);
					
					$query = mysql_query("select * from users where PASSWORD='$PASSWORD' AND EMAIL='$EMAIL'", $conn);
					$num = mysql_num_rows($query);
					if ($rows == 1) {
					$_SESSION['login_user']=$EMAIL; // Initializing Session
					
					header("location: Our_products.php"); // Redirecting To Other Page
					} else {
					$error = "Email or Password is invalid.";
					}
					mysql_close($connection); // Closing Connection
					}
				}
			?>
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
	</body>
</html>
