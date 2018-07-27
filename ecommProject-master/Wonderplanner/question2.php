<!DOCTYPE html>
<html>
<head>
<title>PHP Exercise</title>
<style></style>

</head>
<body>
	<?php
		if(isset($_SESSION['user']))
		{
			$user = $_SESSION['user'];
			echo "You are logged in as " . $_SESSION['user'] ." (from session) <br/><br/>";
		}
		else
			echo 'Please <a href="#">Login</a>';
	?>
	<form>
		<fieldset>
			<legend>What is your favorite gift?</legend>
			<input type="radio" name="ans2" value="Game">Game<br/>
			<input type="radio" name="ans2" value="Clothes">Clothes<br/>
			<input type="radio" name="ans2" value="Book">Book<br/>
			<input type ="radio" name="ans2" value="Other">Other: <input type="text" name="ans2Other"><br/>
			</input>
		</fieldset>
	
		<br/>
	</form>
	
	<input type="submit" value="submit answer" name="btn"/>
	
	<?php
		$ans2 = $feedback = null;
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
				if(!isset($_POST['ans2']))
					echo "<font colo = 'red'><i>Please provide an answer</i></font></br>";
				else
				{
					$ans2 = trim($_POST['ans2']); 
					
					//$feedback = 
				}
		}
		
		//echo "<a href= $next_page>Next quesetion</a>";
		
		// $filestream= fopen($fname, 'w')or die('Unable to open the file!');
	
		// $num = fwrite($filestream, $str);
		
		// if($num)
		// {
			// echo "<br/><br/><hr/> Here is what is in the file: <br/><br/>";
			// <!--echo "<tt>" . file.get <br/><hr/>";
		
		// <!--if(file_exists($fname))
		// {
			
		// }-->

	?>
</body>
</html>