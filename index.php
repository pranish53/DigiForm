<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST" action="process.php">
	Name:        <input type="text" name="name"><br/><br/>
	Contact no:  <input type="number" name="contact"><br/><br/>
	School Name: <input type="text" name="school"><br/><br/>
	Classes you teach DigiCourse:<br/><br/>
	<input type="checkbox" name="class[]" id=class value="Class 1"> Class 1<br/>
	<input type="checkbox" name="class[]" id=class value="Class 2"> Class 2<br/>
	<input type="checkbox" name="class[]" id=class value="Class 3"> Class 3<br/>
	<input type="checkbox" name="class[]" id=class value="Class 4"> Class 4<br/>
	<input type="checkbox" name="class[]" id=class value="Class 5"> Class 5<br/>
	<input type="checkbox" name="class[]" id=class value="Class 6"> Class 6<br/>
	<input type="checkbox" name="class[]" id=class value="Class 7"> Class 7<br/>
	<input type="checkbox" name="class[]" id=class value="Class 8"> Class 8<br/>
	<input type="checkbox" name="class[]" id=class value="Class 9"> Class 9<br/>
	<input type="checkbox" name="class[]" id=class value="Class 10"> Class 10<br/>
	<input type="checkbox" name="class[]" id=class value="Class 11"> Class 11<br/>
	<input type="checkbox" name="class[]" id=class value="Class 12"> Class 12<br/>
	<input type="submit" name="Nextpage" value="Nextpage"><br/>
</form>
</body>
</html>