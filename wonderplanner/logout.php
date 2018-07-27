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

	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">
					  <?php include("header.php");?>
					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">See you next time!</div>
					<div id="main" class="container">
						<div class="row 150%" align="right">
							<div class="8u 12u(mobile)">
								<!-- Content -->
									<div>
										<article class="8u 24u(mobile) special">
											<a href="#"><img src="images/romdate.jpg" alt="" /></a>
										</article>
									</div>
									
									</div>
										
						</div>
						</br>
						<div id="content" align="center">
										<header>
											<h2>
												
												
												<?php 

													// Start session 
													session_start(); 
													 
													// Unset all of the session variables 
													$_SESSION = array(); 

													// Delete Session
													session_destroy(); 
													 											
													$login_redirect = "Login.php";

													// Checking if the session is set
													if(!isset($_SESSION['user_email']) || empty($_SESSION['user_email'])){

													    echo 'You have successfully logged out. See you next time! ';
														echo 'You will be redirected to the login page in 9 seconds.';

														echo '<META HTTP-EQUIV=REFRESH CONTENT="9; '.$login_redirect.'">';

													exit;
													}else{
														echo 'Welcome back, ' . $_SESSION['user_email'] . '!';
													}
				
												?>
												
											</h2>
										</header>
									</div>



			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
				    <?php include("footer.php");?>
				</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>