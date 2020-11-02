<?php
session_start();
include("sqlconn.php");
$name=$_SESSION['name'];
$contact=$_SESSION['contact'];
$school=$_SESSION['school'];
$class = $_SESSION['Class'];
ob_start();
require("fpdf.php");
$pdf = new FPDF();
$pdf->Addpage();
$pdf->SetFont("Arial","B","12");
$pdf->Cell(100,20, 'Full Name: ',1,0,'C');
$pdf->Cell(100,20, $name,1,1,'C');
$pdf->Cell(100,20, 'Contact No: ',1,0,'C');
$pdf->Cell(100,20, $contact,1,1,'C');
$pdf->Cell(100,20, 'School name:');
$pdf->Cell(100,20, $school,1,1,'C');
foreach ($class as $classno){
		if($classno == 'Class 1'){
			$Date = $_SESSION['date1'];
			$Course = $_SESSION['course1'];
			$Positive=$_SESSION['positive1'];
			$Negative = $_SESSION['negative1'];
			$pdf->Cell(100,20, 'Class 1',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 2'){
			$Date = $_SESSION['date2'];
			$Course = $_SESSION['course2'];
			$Positive=$_SESSION['positive2'];
			$Negative = $_SESSION['negative2'];
			$pdf->Cell(100,20, 'Class 2',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 3'){
			$Date = $_SESSION['date3'];
			$Course = $_SESSION['course3'];
			$Positive=$_SESSION['positive3'];
			$Negative = $_SESSION['negative3'];
			$pdf->Cell(100,20, 'Class 3',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 4'){
			$Date = $_SESSION['date4'];
			$Course = $_SESSION['course4'];
			$Positive=$_SESSION['positive4'];
			$Negative = $_SESSION['negative4'];
			$pdf->Cell(100,20, 'Class 4',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 5'){
			$Date = $_SESSION['date5'];
			$Course = $_SESSION['course5'];
			$Positive=$_SESSION['positive5'];
			$Negative = $_SESSION['negative5'];
			$pdf->Cell(100,20, 'Class 5',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 6'){
			$Date = $_SESSION['date6'];
			$Course = $_SESSION['course6'];
			$Positive=$_SESSION['positive6'];
			$Negative = $_SESSION['negative6'];
			$pdf->Cell(100,20, 'Class 6',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 7'){
			$Date = $_SESSION['date7'];
			$Course = $_SESSION['course7'];
			$Positive=$_SESSION['positive7'];
			$Negative = $_SESSION['negative7'];
			$pdf->Cell(100,20, 'Class 1',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 8'){
			$Date = $_SESSION['date8'];
			$Course = $_SESSION['course8'];
			$Positive=$_SESSION['positive8'];
			$Negative = $_SESSION['negative8'];
			$pdf->Cell(100,20, 'Class 8',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 9'){
			$Date = $_SESSION['date9'];
			$Course = $_SESSION['course9'];
			$Positive=$_SESSION['positive9'];
			$Negative = $_SESSION['negative9'];
			$pdf->Cell(100,20, 'Class 9',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 10'){
			$Date = $_SESSION['date10'];
			$Course = $_SESSION['course10'];
			$Positive=$_SESSION['positive10'];
			$Negative = $_SESSION['negative10'];
			$pdf->Cell(100,20, 'Class 10',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 11'){
			$Date = $_SESSION['date11'];
			$Course = $_SESSION['course11'];
			$Positive=$_SESSION['positive11'];
			$Negative = $_SESSION['negative11'];
			$pdf->Cell(100,20, 'Class 11',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
		if($classno == 'Class 12'){
			$Date = $_SESSION['date12'];
			$Course = $_SESSION['course12'];
			$Positive=$_SESSION['positive12'];
			$Negative = $_SESSION['negative12'];
			$pdf->Cell(100,20, 'Class 12',1,1,'C');
			$pdf->Cell(100,20, 'Date of starting',1,0,'C');
			$pdf->Cell(100,20, $Date,1,1,'C');
			$pdf->Cell(100,20, 'Course completed till now: ',1,0,'C');
			$pdf->Cell(100,20, $Course,1,1,'C');
			$pdf->Cell(100,20, 'Positive things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Positive,1,1,'C');
			$pdf->Cell(100,20, 'Negative things that happened: ',1,0,'C');
			$pdf->Cell(100,20, $Negative,1,1,'C');
		}
	}
$filename="response.pdf";
//$contents = $pdf ->Output($filename,"I");
$file = file_get_contents($pdf ->Output($filename,"I"));
$sql = "INSERT INTO Teacher_details(Name, Contact_no, School_name,File_of_classes) VALUES ('$name', '$contact', '$school','$file')";
// $stmt = $conn->prepare("insert into Teacher_details values('',?,?,?,?)");
// $stmt->bindParam(1,$name);
// $stmt->bindParam(2,$contact);
// $stmt->bindParam(3,$school);
// $stmt->bindParam(4,$file);
// $stmt->execute();
ob_end_flush();
if ($conn->query($sql) == TRUE) {
 	echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>