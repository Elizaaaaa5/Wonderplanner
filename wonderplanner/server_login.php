<?php

	$conn = mysqli_connect("localhost", "root", "", "phpmyadmin");
	
	// Checking the  connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "connection failed";
	}

	// initializing variables

	$EMAIL = "";
	$PASSWORD = "";
	$errors=array();
			
	// Check if valid email and password
	if (isset($_POST['submit'])) {
 
	  $EMAIL = $_POST['contact_email'];
	  $PASSWORD = $_POST['contact_password'];
  	
      // Check if the username and the password are correct
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
		
		//Checks for rows with submitted email and hashed password
		$check = mysql_query("SELECT EMAIL FROM users WHERE EMAIL = '$EMAIL2'and PASSWORD='$pass'")  
			or die(mysql_error()); 
		
		//Counts for number of rows with correct info
		$check2 = mysql_num_rows($check); 

		// 
		if ($check2 != 0) { 
			
			echo "Welcome back ".($_POST['email'])."!";
			//Redirecting page
			//<meta http-equiv="refresh" content="5; url=http://localhost/wonderplanner/Our_products.php">;
		}else{
			
			echo "There was an issue logging in. Please try again.";
		}
	}

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
			
  $conn->close();
  