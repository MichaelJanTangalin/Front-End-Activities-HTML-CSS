<html>
	<head>
		<title>View Participants</title>
	</head>

<body>
	<?php
		include("myconnections.php");
		include("myInclude.php");
		$id = $_GET['a'];
		$retrieve_participants = "SELECT * from tbl_participants where id='$id'";
		$result = $con->query($retrieve_participants);
	?>
	
	<h2>LIST OF PARTICIPANTS</h2>

	<table border="1" bgcolor = '#00D1D8'>
			<tr>
				<th>ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>MI</th>
				<th colspan="3">Actions</th>
			</tr>
	<?php
		while($row = mysqli_fetch_array($result)) 
		{
			echo"<tr>
				
				<td>$row[id]</td>
				<td><input type='text' id='id_lname' value='$row[lname]'</td>
				<td><input type='text' id='id_fname' value='$row[fname]'</td>
				<td><input type='text' id='id_mi'    value='$row[mi]'</td>
				<td><button class = 'Editbutton' onclick='updateme($row[id])'>Update</button></td>
				</tr>";
		}
	?>
	</table>
	</body>
</html>