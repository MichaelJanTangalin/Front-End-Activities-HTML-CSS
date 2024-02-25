<html>
	<head>
		<title>PHP Activity 1</title>
	</head>
		<body>
		 <center>
			<?php
				$myheading = "Student Masterlist For WEB Development";	
				$lname = "Tangalin";
				$fname = "Michael Jan";
				$mi = "R.";
				$addr = "Riverside Commonwealth QC";
				$bday = "January 20, 2000";
				$contact = "09955908362";
			?>
		 
		 
		 
			<h1><?php echo $myheading?></h1>
			<table border = "1">
				<tr>
					<th>Student Name</th>
					<th>Address</th>
					<th>Birthday</th>
					<th>Contact No.</th>
				</tr>
				
				<tr>
					<td><?php echo $lname." ".$fname." ".$mi?></td>
					<td><?php echo $addr?></td>
					<td><?php echo $bday?></td>
					<td><?php echo $contact?></td>
				</tr>
			</table>
			
			
		 </center>
		</body>
	
</html>