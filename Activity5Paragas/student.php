<!DOCTYPE html>
<html>
<head>
	<title>STUDENT INFORMATION</title>
</head>
<body >
	<header style="position: fixed; background-color: rosybrown; left: 0; top: 0; height: 70px; width: 100% "><h1 align="center">STUDENT INFORMATION</h1></header>

	<br><br><br><br>
	<center><h2><b>Student Account</b></h2>
	<form action="student.php" method="POST" >

		<label>Last Name:</label>
		<input type="text" name="lname">
		<br><br>
		<label>First Name:</label>
		<input type="text" name="fname">
		<br><br>
		<label>ID:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="id">
		<br><br>
		<label>Class Code:</label>
		<input type="text" name="classcode">
		<br>
		<h2>Class Information</h2>
		
		<label>Description:</label>
		<input type="text" name="description">
		<br><br>
		<label>Room:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="room">
		<br><br>
		<label>Time:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="tm">
		<br><br>
		<label>Days:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="days">
		<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" name="btnSubmit" style="font-size: 20px">Submit</button>
		<button type="submit"><a href="result.php" style="text-decoration-line: none; color: black; font-size: 20px">View All</a></button>

    		<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$databasename = "dbstudents";

    		$connect = mysqli_connect($servername,$username,$password,$databasename);

    			if (isset($_POST['btnSubmit'])) {
        	$lastname = $_POST['lname'];
        	$firstname = $_POST['fname'];
        	$id = $_POST['id'];
        	$classcode = $_POST['classcode'];
        	$description = $_POST['description'];
        	$room = $_POST['room'];
        	$time = $_POST['tm'];
       		$days = $_POST['days'];

        $insert = "INSERT INTO tblaccount(lname,fname,id,classcode,description,room,tm,days)VALUES('$lastname','$firstname','$id','$classcode','$description','$room','$time','$days')";
		$query = mysqli_query($connect,$insert);

		echo "<br><br>";

			if ($query == TRUE) {

				echo "&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp<strong>Record Added</strong>";
			}
			else{
				echo "&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp<strong>Record not Added</strong>";
			}
    	}

    	?>

	</form></center>

	<footer style="background-color: rosybrown;width: 100%; left: 0px; bottom: 0; height: 20px; right: 0; position: fixed;"><div align="center">submitted by: Paragas, Monica Deane R.</div></footer>

	

</body>
</html>