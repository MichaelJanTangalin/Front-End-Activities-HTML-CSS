<html>
	<head>
		<title>View Participants</title>
	</head>
	<?php
		include("myconnections.php");
		include("myInclude.php");
		$retrieve_participants = "SELECT * from tbl_participants order by lname, fname";
		$result = $con->query($retrieve_participants);
	?>
	
	<h2>LIST OF PARTICIPANTS</h2>
	<table border="1" bgcolor = '#00D1D8' cellpadding="5">
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
				<td>$row[lname]</td>
				<td>$row[fname]</td>
				<td>$row[mi]</td>
				<td><button class = 'Editbutton' onclick='viewedit($row[id])'>Edit</button></td>
				<td><button class = 'Deletebutton' onclick='deleteme($row[id])'>Delete</button></td>
				<td><button class = 'printButton' onclick='printme($row[id])'>Print</button></td>
			</tr>";
			}
			?>
	</table>
</html>