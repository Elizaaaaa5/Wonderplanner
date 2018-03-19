<body bgcolor="#F5C750"><section align="center"><font color="#F5E550"><strong><?php

	$conn = mysqli_connect("localhost", "root", "", "phpmyadmin");
	
	// Checking the  connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "connection failed";
	}

	// initializing variables
	$FIST_NAME = "";
	$LAST_NAME = "";
	$EMAIL = "";
	$PASSWORD = "";
	$ADDRESS="";
	$CITY="";
	$STATE="";
	$ZIPCODE="";
	$errors=array();
	
	// REGISTER USER
	if (isset($_POST['submit'])) {
 
	  $FIRST_NAME = $_POST['contact_name'];
	  $LAST_NAME = $_POST['contact_lname'];
	  $EMAIL = $_POST['contact_email'];
	  $PASSWORD = $_POST['contact_password'];
	  $ADDRESS = $_POST['contact_address'];
	  $CITY = $_POST['contact_city'];
	  $STATE = $_POST['contact_state'];
	  $ZIPCODE = $_POST['contact_zipcode'];
  	
      // first check the database to make sure a user does not already exist with the same username and/or email
	  $emailfound=false;

	  $sql='select `EMAIL` from `users` where `EMAIL`=?';
	 $stmt=$conn->prepare( $sql );
	 if( $stmt ){
 
		 $stmt->bind_param("s",$_POST['contact_email']);
		 $result=$stmt->execute();
		 if( $result ){
			 $stmt->store_result();
			 $stmt->bind_result( $emailfound );
			 $stmt->fetch();
			 $stmt->free_result();
		 }
	 }
 
	 if( $emailfound ){
		 echo 'Sorry, that email address already exists in our database. Please try again with a different address.';
		 $stmt->close();
		 $conn->close();
 
	 } else {
    // Finally, register user if there are no errors in the form
    	// $PASSWORD = md5($PASSWORD);//encrypt the PASSWORD before saving in the database

    	$sbm = $conn->prepare("INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL, ADDRESS, CITY, STATE, ZIPCODE, PASSWORD) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$hashpass = password_hash($_POST['contact_password'], PASSWORD_DEFAULT);
		$sbm->bind_param("ssssssss", $_POST['contact_name'], $_POST['contact_lname'], $_POST['contact_email'], $_POST['contact_address'], $_POST['contact_city'], $_POST['contact_state'], $_POST['contact_zipcode'], $hashpass);
		$sbm->execute();
    	// $_SESSION['success'] = "You are now logged in";
		echo("Account created successfully!");
    	header('location: Sign_up.php');
    

	if(isset($_POST['contact_email'])) {
 
		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to_us = "wonderplannerofficial@gmail.com";
		$email_to_user = $_POST['contact_email'];
		$email_subject_user = "Thank you for registering at Wonder Planner!";
		$email_subject_us = "New User Notification: $EMAIL";
	
	 
		$name = $_POST['contact_name']; // required
		$email_from = $_POST['contact_email']; // required
		$email_message_user = "Hey!\n\nThank you for signing up! Here at Wonderplanner, we offer various event packages to help you have the best time at your event, communicate seamlessly between groups, and save money along the way! \n\nLooking forward to hear back from you soon! \n\nCheers, \nThe Wonder Planner Team";
		$email_message_us = "A new user just registered!\n\n";
	 
		 
		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
	 
		 
	 
		$email_message .= "Name: ".clean_string($name)."\n";
		$email_message .= "Email: ".clean_string($email_from)."\n";
	 
	// send email to user
	$headers = 'From: '.$email_to_us."\r\n".
	'Reply-To: '.$email_to_us."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to_user, $email_subject_user, $email_message_user, $headers);  

	// send email to us
	// $headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to_us, $email_subject_us, $email_message_us, $headers);  
	
	?>
	 
	<!-- include your own success html here -->
	 
	Thank you for Signing up!
	 
	<?php
	 
	}
}

//   if ($conn->query(conn) === TRUE) {
//       echo "New record created successfully";
//   } else {
//       echo "Error: " . conn . "<br>" . $conn->error;
//   }
}

//   $conn->close();
?>
