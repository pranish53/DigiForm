<?php 
	$Date = $_POST['Date8'];
	$Course = $_POST['completed8'];
	$Positive = $_POST['positive8'];
	$Negative = $_POST['negative8'];
	session_start();
	$_SESSION['date8']=$Date;
	$_SESSION['course8']=$Course;
	$_SESSION['positive8']=$Positive;
	$_SESSION['negative8']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
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