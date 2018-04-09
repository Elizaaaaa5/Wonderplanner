<?php include ("server_login.php")?>
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
					<div class="title">Member Homepage</div>
					<div id="main" class="container">

								<!-- Content -->
									
										<section align="left">
											<?php
												session_start();

												$login_redirect = "Login.php";
												
												if(isset($_SESSION['user_email'])){
													$user = $_SESSION['user_email'];
												}
												
												// Checking if the session is set
												if(!isset($_SESSION['user_email']) || empty($_SESSION['user_email'])){

												echo '<header class="style1"><h2 align=\"right\">Please log in to view this page. </br> You will be redirected in 9 seconds.</h2></header>';
												echo '<META HTTP-EQUIV=REFRESH CONTENT="9; '.$login_redirect.'">';

												exit;
												}

											?>
										</section>
										
										<div class="row 200%" align="right">
											<div align="right">
												<nav>
												  <ul>
													<li><a class="button style1">Logged in as <?php echo ($user)?></a></li>
						
												  </ul>
												</nav>
											</div>
											<div align="right">
												<?php
													if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
													{
														logout();
													}
													function logout()
													{
														header("Location:logout.php"); 
														exit;     
													}
												  ?>
											
												<nav>
												  <ul>
													<li><form action="logout.php" method="post"><input type="submit" name="log" value="LOGOUT" class="style2"/></form></li>
												  </ul>
												</nav>
											</div>
										</div>
										
										<div align="center">		
										
												<header class="style1">
													<h2>MEMBER HOMEPAGE</h2>
												</header>
										
										</div>
										
								
							
										
								<div class="row 150%">
									<section class="box">
										<header>
											<h2>Your Profile</h2>
										</header>
										<ul>
											<li>
												<article class="box post-excerpt">
													<a href="#" class="image left"><img src="images/eliza.jpg" alt="" /></a>
													<h3><a href="#">Eliza Chen</a></h3>
													<strong>Email: </strong><a href="mailto:<?php echo $user;?>"><?php echo $user;?></a>
													<p><strong>Account Type:</strong> Personal
													<strong>Address:</strong> 267 Mary Munford, Charlottesville, VA 22904</p>
												</article>
											</li>
										</ul>
										<ul class="actions">
										  <li><a href="#" class="button style1">Edit
										  </a></li>
										</ul>
									</section>
									<div class="6u 12u(mobile)">
									<section class="box">
										<header>
										<h2>See What Others are Saying about Wonder Planner and Their Packages!</h2>
										</header>

											

											<strong>The Girls Night Out Package</strong>
											</p>
											“I saved so much time using Wonder Planner! My friends and I had the best girls night out, and we didn’t have to worry about a thing because Wonder Planner took care of it all!” - L. Tarjun, member since 2015
											</p>
										
											<strong>The Conference/Business Meeting Package</strong>
											<p>
											“Wonder Planner has really changed the way that businesses plan corporate events. By partnering with Wonder Planner, we were able to provide all of our employees with a seamless travel experience for our WDYN conference.” - Silver Cloud Inc., proud corporate partner since 2016
											</p>

											

											<strong>The Romantic Date Package</strong>
											<p>
											“I couldn’t believe the discount I got on movie tickets and dinner because of Wonder Planner! My date and I had a great time on our first date, and Wonder Planner even took care of the flowers! Thank you Wonder Planner for helping me have a perfect time with my now girlfriend.” - M. Mahoney, new member of 2018
											</p>


									</section>
									</div>
							
								<div class="6u 12u(mobile)">
								<section class="box">
								<header>
								<h2>Thank You!</h2>
								</header>
								<p>
								We want to thank you for being a member! Wonder Planner packages are always changing and being improved, but this time we want to hear from you! As a thank you, we are taking suggestions for what our next three packages should be. Email us at <u><font color="blue">wonderplannerofficial@gmail.com</font></u> and the next idea for a package could be yours! Users who suggested any of the three winning packages will get the one(s) they suggested for <font color="red">FREE!</font>

								</p>

								</section>
								</div>
							
								</div>

								<div class="6u 12u(mobile)">
								<section class="box">
								<header>
								<h2>Attention Standard Package Members:</h2>
								</header>
								<p>

								Premium members have the option to customize their packages. Become a Premium member today and get <font color="red">30% off</font> your first customization!

								</p>



								</section>
								</div>

								<div class="6u 12u(mobile)">
								<section class="box">
								<header>
								<h2>Keep Your Eyes Out</h2>
								</header>
								<p>

								Next week we’re unveiling a new package for <strong>MEMBERS ONLY!</strong> Tag us on Instagram or Facebook <font color="red">(@WonderPlannerOfficial)</font> in a picture of you enjoying a Wonder Planner package and you could win the package for <strong>FREE</strong>!


								</p>



								</section>
								</div>

								<div class="4u 12u(mobile)">

								<!-- profile -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Recent Transactions</h2>
											</header>
											<li><a href="#">ORDER # 111-1903680-9989441</a></li>
											<li><a href="#">ORDER # 111-1903680-9985329</a></li>
										</section>

									</div>
									</div>
								</div>
						</div>
					</div>
				</div>
				</div>

				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">Our Packages</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/familytrip.jpg" alt="" /></a>
									<h3><a href="#">Family Trip</a></h3>
									<p>Enjoy a trip to your local zoo, a great pinic and the adventures!</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Purchase</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/romantic.jpg" alt="" /></a>
									<h3><a href="#">Romantic Date</a></h3>
									<p>Start with a rose delivered to her door and tour the boardwalk after dinner.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Purchase</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/business.jpg" alt="" /></a>
									<h3><a href="#">Business Meeting</a></h3>
									<p>Fly to the conference and sleep at the top of a 5 star hotel.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Purchase</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>
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

	</body>
</html>