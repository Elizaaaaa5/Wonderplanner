<?php
// $servername = "localhost";
// $username = "root";
// $PASSWORD = "";
// $db = "phpmyadmin";

// Create connection
//$conn = new mysqli($servername, $username, $PASSWORD, $db);

	$conn = mysqli_connect('localhost', 'root', '', 'phpmyadmin');
	// Check connection
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
  	
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 
 $user_check_query = "SELECT * FROM users WHERE contact_email='$EMAIL' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['contact_email'] === $EMAIL) {
      array_push($errors, "email already exists");
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
    	header('location: server.php');
    }


  if ($conn->query(sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . sql . "<br>" . $conn->error;
  }
}

  $conn->close();
  ?>
