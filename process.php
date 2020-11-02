<?php 
session_start();
$name = $_POST["name"];
$contact = $_POST['contact'];
$school = $_POST['school'];
$_SESSION['name'] = $name;
$_SESSION['contact'] = $contact;
$_SESSION['school'] = $school;
if(isset($_POST['class'])){
	$class = $_POST['class'];
	$length = count($class);
	$_SESSION['length'] = $length;
	$class = array_reverse($class);
	$_SESSION['Class'] = $class;
	echo $length;
	foreach ($class as $classno){
		if($classno == 'Class 1'){
			header("location:Class_1.php");
		}
		if($classno == 'Class 2'){
			header("location:Class_2.php");
		}
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
}
?>