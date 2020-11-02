<?php 
	$Date = $_POST['Date6'];
	$Course = $_POST['completed6'];
	$Positive = $_POST['positive6'];
	$Negative = $_POST['negative6'];
	session_start();
	$_SESSION['date6']=$Date;
	$_SESSION['course6']=$Course;
	$_SESSION['positive6']=$Positive;
	$_SESSION['negative6']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
		if($classno == 'Class 7'){
			header("location:Class_7.php");
		}
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