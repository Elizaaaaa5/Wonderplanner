<body bgcolor="#F5C750"><section align="center"><font color="#F5E550"><strong>
<?php

 	$conn = mysqli_connect("localhost", "root", "", "phpmyadmin");
	
	//Checking the  connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "connection failed";
	}


	//initializing variables

	$EMAIL = "";
	$PASSWORD = "";
	$HASHED_PASSWORD = "";
	$email_err = "";
	$password_err = "";
	$errors=array();
	$_SESSION['user_email'] = '';
	$_SESSION['logged_in'] = false;
	
	// Processing form data when form is submitted
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		 
			// Check if email or password is empty
			
			if(isset($_POST['email'])){
				
				$EMAIL = $_POST['email'];
			}
			$email_err = "";

			if(empty($_POST['password'])){
				$passw_err = "Please enter a valid password.";
			} else{
				$PASSWORD = trim($_POST['password']);
			}
			
			// Validating email and password
			if(empty($username_err) && empty($password_err)){
				
				//All the rows (should only be one)
				$sql = "SELECT * FROM `users` WHERE `EMAIL` = '{$EMAIL}'";
				$query = mysqli_query($conn, $sql);
				$numRows = mysqli_num_rows($query);
				
				if($numRows == 1){
					
					//Getting row information
					$row = mysqli_fetch_assoc($query);
					
					//Getting the hashed password from that row
					$pass_row = $row['PASSWORD'];
					$fname = $row['FIRST_NAME'];
					$lname = $row['LAST_NAME'];
					
					if(password_verify($PASSWORD, $pass_row)){				
						/* Password is correct, so start a new session and
						save the username to the session */
						
						session_start();
						$_SESSION['user_email'] = $EMAIL;   
						$_SESSION['logged_in'] = true;
						header("location: memberhome.php");
					} else{
						// Display an error message if password is not valid
						echo 'Invalid Password. Please try again.';
					}
				}else{
					echo 'Email not found in database.Please try again.';
				}
				
			}else{
				echo 'Login attempt failed. An unexpected error occurred';
			}
			
			// Close connection
			  $conn->close();
}
?>
  