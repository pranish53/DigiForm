<?php 
	$Date = $_POST['Date2'];
	$Course = $_POST['completed2'];
	$Positive = $_POST['positive2'];
	$Negative = $_POST['negative2'];
	session_start();
	$_SESSION['date2']=$Date;
	$_SESSION['course2']=$Course;
	$_SESSION['positive2']=$Positive;
	$_SESSION['negative2']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	$class = $_SESSION['Class'];
	foreach ($class as $classno){
		if($classno == 'Class 3'){
			header("location:Class_3.php");
		}
		if($classno == 'Class 4'){
			header("location:Class_4.php");
		}
		if($classno == 'Class 5'){
			header("location:Class_5.php");
		}
		if($classno == 'Class 6'){
			header("location:Class_6.php");
		}
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