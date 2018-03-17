<?php 

	echo "<h1>Hello World!</h1>";

?>

<?php 

	$myvar = 9;
	echo gettype($myvar) . "<br/>";
	$myvar = "abc";
	echo gettype($myvar) . "<br/>";
	
	var_dump($myvar);
	
	//Automatically adds based on index
	
	$days[] = 'Monday';
	$days[] = 'Tuesday';
	$days[] = 'Wednesday';
	$days[5] = 'New Day';
	
	var_dump($days);
	
	//Will start at the current index
	$days[] = 'Thursday';
	
	//var_dump($days);
?>

	