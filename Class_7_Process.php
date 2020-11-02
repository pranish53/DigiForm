<?php 
	$Date = $_POST['Date7'];
	$Course = $_POST['completed7'];
	$Positive = $_POST['positive7'];
	$Negative = $_POST['negative7'];
	session_start();
	$_SESSION['date7']=$Date;
	$_SESSION['course7']=$Course;
	$_SESSION['positive7']=$Positive;
	$_SESSION['negative7']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
		if($classno == 'Class 8'){
			header("location:Class_8.php");
		}
		if($classno == 'Class 9'){
			header("location:Class_9.php");
		}
		if($classno == 'Class 10'){
			header("location:Class_10.php");
		}
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