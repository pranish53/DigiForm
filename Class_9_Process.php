<?php 
	$Date = $_POST['Date9'];
	$Course = $_POST['completed9'];
	$Positive = $_POST['positive9'];
	$Negative = $_POST['negative9'];
	session_start();
	$_SESSION['date9']=$Date;
	$_SESSION['course9']=$Course;
	$_SESSION['positive9']=$Positive;
	$_SESSION['negative9']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
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