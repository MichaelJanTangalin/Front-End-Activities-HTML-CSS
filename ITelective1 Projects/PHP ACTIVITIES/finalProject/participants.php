<html>
	<head>
		<title>PARTICIPANTS</title>
	</head>
	
	<link rel="stylesheet" href="mystyle/mystyle.css"/>
		<?php
			include("myInclude.php");
		?>
		<center>
		<div id = "wrapper">
		<body class ="bodyBackground1">
		
		
		<div class="noPrint" id="main">
		 <h1 >PARTICIPANTS</h1>
		 <table border="1" bgcolor = "#00E155" >
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Mi.</th>
				<th>ACTIONS</th>
			</tr>
		
			<tr>
				<td><input required type="text" name="lname" id="lname_id"></td>
				<td><input required type="text" name="fname" id="fname_id"></td>
				<td><input required type="text" name="mi" id="mi_id"></td>
				<input type="hidden" name="submit" value="submit">
				<td><button class = "Addbutton" onclick="insertme()">ADD RECORD</button></td>
				
			</tr>
		 </table>
		 </div>
		 <div id="myresult"></div> 
	
		</body>
		
		</center>
		</div>
</html>

