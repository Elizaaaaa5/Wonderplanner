<?php

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
	   function checkemail(){
		  // $user_check_query = "SELECT count(*) FROM users WHERE EMAIL = 'contact_email' LIMIT 1";
		  // $result = mysqli_query($db, $user_check_query);
		  // $user = mysqli_fetch_assoc($result);
		  
		  // if ($user_check_query > 0) { // if user exists
		   // if ($user['contact_email'] === $EMAIL) {
			  // array_push($errors, "This email already is already taken. Please use a different email.");
		   // }
		  // }
		  
			if (!get_magic_quotes_gpc()) { 
			$_POST['contact_email'] = addslashes($_POST['contact_email']); 
			} 
			$emailcheck = $_POST['contact_email']; 
			$check     = mysql_query("SELECT EMAIL FROM users WHERE EMAIL = '$emailcheck'")  
			or die(mysql_error()); 
			$check2    = mysql_num_rows($check); 

			//  if the name exists it gives an error 
			if ($check2 != 0) { 
			die('Sorry, the email '.$_POST['contact_email'].' is already in use.'); 
			}
	   }
	  
	  
  	// $sql_e = "SELECT * FROM users WHERE contact_email ='$EMAIL'";
  	// $res_e = mysqli_query($conn, $sql_e);

  	// if(mysqli_num_rows($res_e) > 0){
  	  // $email_error = "Sorry, this email already taken!"; 	
  	// }else{
           // exit();
	// }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    	// $PASSWORD = md5($PASSWORD);//encrypt the PASSWORD before saving in the database

    	$sbm = $conn->prepare("INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL, ADDRESS, CITY, STATE, ZIPCODE, PASSWORD) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$hashpass = password_hash($_POST['contact_password'], PASSWORD_DEFAULT);
		$sbm->bind_param("ssssssss", $_POST['contact_name'], $_POST['contact_lname'], $_POST['contact_email'], $_POST['contact_address'], $_POST['contact_city'], $_POST['contact_state'], $_POST['contact_zipcode'], $hashpass);
		$sbm->execute();
    	// $_SESSION['success'] = "You are now logged in";
		echo("Account created successfully!");
    	header('location: Sign_up.php');
    }else{
		echo $errors[0];
	}

	if(isset($_POST['contact_email'])) {
 
		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to_us = "wonderplannerofficial@gmail.com";
		$email_to_user = $_POST['contact_email'];
		$email_subject_user = "Thank you for registration";
		$email_subject_us = "New User";
	
	 
		$name = $_POST['contact_name']; // required
		$email_from = $_POST['contact_email']; // required
		$email_message_user = "Thank you for signing up!\n\n";
		$email_message_us = "A new user just registered!\n\n";
	 
		 
		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
	 
		 
	 
		$email_message .= "Name: ".clean_string($name)."\n";
		$email_message .= "Email: ".clean_string($email_from)."\n";
	 
	// send email to user
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to_user, $email_subject_user, $email_message_user, $headers);  

	// send email to us
	// $headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to_us, $email_subject_us, $email_message_us, $headers);  
	
	?>
	 
	<!-- include your own success html here -->
	<header class="style1"><h2>Thank you for signing up! <br/> A confirmation email is on the way to <br/><font color="#39A6A8"><?php echo ($_POST['email_from']);?>!<h2></header>
	 
	 
	<?php
	 
	}

  if ($conn->query(sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . sql . "<br>" . $conn->error;
  }
}

  $conn->close();
?>
