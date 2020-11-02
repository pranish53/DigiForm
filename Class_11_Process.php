<?php 
	$Date = $_POST['Date11'];
	$Course = $_POST['completed11'];
	$Positive = $_POST['positive11'];
	$Negative = $_POST['negative11'];
	session_start();
	$_SESSION['date11']=$Date;
	$_SESSION['course11']=$Course;
	$_SESSION['positive11']=$Positive;
	$_SESSION['negative11']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
		if($classno == 'Class 12'){
			header("location:Class_12.php");
		}
	}
	if($length == 0){
		header("location:topdf.php");
	}

?>