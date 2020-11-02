<?php 
	$Date = $_POST['Date10'];
	$Course = $_POST['completed10'];
	$Positive = $_POST['positive10'];
	$Negative = $_POST['negative10'];
	session_start();
	$_SESSION['date10']=$Date;
	$_SESSION['course10']=$Course;
	$_SESSION['positive10']=$Positive;
	$_SESSION['negative10']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
		if($classno == 'Class 11'){
			header("location:Class_11.php");
		}
		if($classno == 'Class 12'){
			header("location:Class_12.php");
		}
	}
	if($length == 0){
		header("location:topdf.php");
	}

?>