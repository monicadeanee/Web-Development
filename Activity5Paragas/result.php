

<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<center><body style="position: fixed; width: 100%">
	<?php include ('connect.php');  ?>
	<header style="position: fixed; background-color: rosybrown; width: 100%;left: 0px; top: 0px">
			<h1 align="center">Student Information</h1>
	</header>



<br><br><br><br><br><br><br><br>
<button><a href="student.php" style="text-decoration-line: none;color: black;font-size: 15px"> +Add More</a></button>


	<br><br>


		<table border="2" style="font-size: 20px; border-color: pink; color: purple">
			<th style="color: rosybrown">ID</th>
			<th style="color: rosybrown">Last Name</th>
			<th style="color: rosybrown">First Name</th>
			<th style="color: rosybrown">Subject</th>
			<th style="color: rosybrown">Description</th>
			<th style="color: rosybrown">Room</th>
			<th style="color: rosybrown">Time</th>
			<th style="color: rosybrown">Day</th>
		<?php

		
	
			$sqlSelect = "SELECT * FROM tblaccount";
			$query = mysqli_query($connect,$sqlSelect);
			while($row = mysqli_fetch_array($query)){
			?>	
				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['lname']?></td>
					<td><?php echo $row['fname']?></td>
					<td><?php echo $row['classcode']?></td>
					<td><?php echo $row['description']?></td>
					<td><?php echo $row['room']?></td>
					<td><?php echo $row['tm']?></td>
					<td><?php echo $row['days']?></td>


				</tr>

			<?php
		}
		?>

	</table>

	<br>
	<button><a href="student.php" style="text-decoration-line: none;color: black;font-size: 15px"> +Add More</a></button>

	<footer style="background-color: rosybrown;width: 100%; left: 0px; bottom: 0; height: 20px; right: 0; position: fixed;"><div align="center">submitted by: Paragas, Monica Deane R.</div></footer>


</body></center>
</html>