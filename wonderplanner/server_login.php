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

	/*	
	Check if valid email and password
	if (isset($_POST['submit'])) {
 
	  $EMAIL = $_POST['contact_email'];
	  $PASSWORD = $_POST['contact_password'];
  	
      Check if the username and the password are correct
	   function checkingloginInfo(){
			
			if(!$this->checkLoginDB($EMAIL,$PASSWORD)){
				return false;
			}
			
			session_start();
			$_SESSION[$this->GetLoginSessionVar()] = $username;
			
			return true;
			
	   
	   }			
			
	}
	
		function checkLoginDB($EMAIL, $PASSWORD){
		if(!$this->DBLogin()){
			$this->HandleError("Failure to login to database.");
			return false;
		}
		
		$EMAIL2 = $_POST['contact_email'];
		$pass = password_hash($password);
		
		Checks for rows with submitted email and hashed password
		$check = mysql_query("SELECT EMAIL FROM users WHERE EMAIL = '$EMAIL2'and PASSWORD='$pass'"); 
		
		Counts for number of rows with correct info
		$check2 = mysql_num_rows($check); 

		
		if ($check2 != 0) { 
			
			echo "Welcome back ".($_POST['email'])."!";
			Redirecting page
			<meta http-equiv="refresh" content="5; url=http://localhost/wonderplanner/Our_products.php">;
		}else{
			
			echo "There was an issue logging in. Please try again.";
		}
	} */

	// if(isset($_SESSION['login_user'])){
		// header("location: Our_products.php");
	// }
	
	
	// if(isset($_POST['submit'])){
		// session_start();
	
		// $error='';
		// if(empty($_POST['contact-email']) || empty($_POST['contact-password'])){
			
			// $error = "There was an issue logging in. Please try again.";
		// }else{
		// $EMAIL = $_POST['contact_email'];
		// $PASSWORD = $_POST['contact_password'];

		// $EMAIL = stripslashes($EMAIL);
		// $PASSWORD = password_hash($PASSWORD);
		// $EMAIL = mysql_real_escape_string($EMAIL);
		// $PASSWORD = mysql_real_escape_string($PASSWORD);
		
		// $query = mysql_query("select * from users where PASSWORD='$PASSWORD' AND EMAIL='$EMAIL'", $conn);
		// $num = mysql_num_rows($query);
		// if ($rows == 1) {
		// $_SESSION['login_user']=$EMAIL; // Initializing Session
		
		// header("location: Our_products.php"); // Redirecting To Other Page
		// } else {
		// $error = "Email or Password is invalid.";
		// }
		// mysql_close($connection); // Closing Connection
		// }
	// }
	
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
					
					if(password_verify($PASSWORD, $pass_row)){				
						/* Password is correct, so start a new session and
						save the username to the session */
						
						session_start();
						$_SESSION['user_email'] = $EMAIL;      
						header("location: Our_products.php");
					} else{
						// Display an error message if password is not valid
						echo 'The password you entered was not valid.';
					}
				}else{
					echo 'The email entered is '. $_POST['email'];
					echo 'The number of rows with that email is '. $numRows;
				}
				
			}
			
			// Close connection
			  $conn->close();
}
?>
  