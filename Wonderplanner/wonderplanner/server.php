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
<<<<<<< HEAD

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
  

  //  if(isset($_POST["submit"]))
  //   {
  //       $error = 0;
  //       if ((isset($_POST['contact_name']) && !empty($_POST['contact_name']))||
	// 			(isset($_POST['contact_lname']) && !empty($_POST['contact_lname']))) {
	// 				$FIRST_NAME=mysqli_real_escape_string($conn,trim($_POST['contact_name']));
  //         $LAST_NAME=mysqli_real_escape_string($conn,trim($_POST['contact_lname']));
  //       }else{
  //           $error = 1;
  //           $empty_username="Username Cannot be empty.";
  //           echo $empty_username.'<br>';
  //       }
  //       if (isset($_POST['contact_email']) && !empty($_POST['contact_email'])) {
  //           $EMAIL=mysqli_real_escape_string($conn,trim($_POST['contact_email']));
  //       }else{
  //           $error =1;
  //           $empty_email="Email cannot be empty.";
  //           echo $empty_email.'<br>';
  //       }

  //       if (isset($_POST['contact_password']) && !empty($_POST['contact_password'])) {
  //           $psw=mysqli_real_escape_string($conn,trim($_POST['contact_password']));
  //       }else{
  //           $error = 1;
  //           $empty_password="Password cannot be empty";
  //           echo $empty_password.'<br>';
  //       }

  //       if (isset($_POST['contact_password2']) && !empty($_POST['contact_password2'])) {
  //           $PASSWORD2=mysqli_real_escape_string($conn,trim($_POST['contact_password2']));
  //       }else{
  //           $error = 1;
  //           $empty_repassword="Retype password cannot be empty";
  //           echo $empty_repassword.'<br>';
  //       }

  //       $PASSWORD=password_hash('$psw',PASSWORD_BCRYPT);
  //       $date=mysqli_real_escape_string($conn, trim('now()'));
  //       if($psw!=$PASSWORD2)
  //       {
  //           echo "password not Matched";
  //       }

  //       if(!$error) {
  //           $sql="SELECT * from users WHERE (contact_email='$EMAIL');";
	// 					$res=mysqli_query($conn,$sql);
  //           // if (sqli_num_rows($res) > 0) {
  //           // output data of each row
	// 					$row = mysqli_fetch_assoc($res);
  //           // <!-- if ($username==$row['username'])
  //           // {
  //           //     echo "Username already exists";
  //           // } -->
  //           if($row==$row['EMAIL'])
  //           {
  //               echo "Email already exists";
  //           }
  //       }else { //here you need to add else condition
  //           echo "alright";
  //       }
  //       // }
  //   }
	// 	$conn->close();
  //   ?>
=======

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
>>>>>>> d07fc77012da967ee1fcfe27a1de82577a0cfb2d
