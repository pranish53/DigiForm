<?php 
	$Date = $_POST['Date12'];
	$Course = $_POST['completed12'];
	$Positive = $_POST['positive12'];
	$Negative = $_POST['negative12'];
	session_start();
	$_SESSION['date12']=$Date;
	$_SESSION['course12']=$Course;
	$_SESSION['positive12']=$Positive;
	$_SESSION['negative12']=$Negative;
	$length = $_SESSION['length'];
	$length = $length - 1;
	$_SESSION['length'] = $length;
	if($length == 0){
		header("location:topdf.php");
	}

?>