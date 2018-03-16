<!DOCTYPE html>
<html>
<head>
<title>PHP Exercise</title>
<style></style>

</head>
<body>

	<form>
		What is the main difference b/t JS and PHP?
	
		<br/>
		<textarea rows ="5" cols="20" name="ans1"></textarea>
	</form>
	
	<input type="submit" value="submit answer" name="btn"/>
	
	<?php
		$answer1 = null;
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
				if(empty($_POST[ans1]))
					echo "Please provide an answer </br>";
				else
				{
					$answer1 = $_POST['ans1'];
					echo $answer1;
				}
		}
		
		echo "<a href= $next_page>Next quesetion</a>";
	?>
</body>
</html>