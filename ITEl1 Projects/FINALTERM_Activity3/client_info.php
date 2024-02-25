<!DOCTYPE html>
<html>
<head>
    <title>Client Information</title>
    
</head>
	<body>
	
	
		<?php
			$printFname = $_POST['fname'];
			$printMdname = $_POST['mdname'];
			$printLname = $_POST['lname'];
			$printAddress = $_POST['address'];
			$printMunicipality = $_POST['municipality'];
			$printProvince = $_POST['province'];
			$printDate = $_POST['dateofdeposit'];
			$printAmount = $_POST['amount'];
			
			echo "<h1>Welcome Mr./Mrs. $printLname</h1> ";
			echo "<b>Name</b>: " .$printLname.', '.$printFname.' '.$printMdname.'<br/><br/>';
			echo "<b>Address</b>: ".$printAddress.' '.$printMunicipality.' '.$printProvince.'<br/><br/>';
			echo "<b>Deposit Date</b>: ".$printDate.'<br/><br/>';
			echo "<b>Deposit Amount</b>: ".$printAmount.'<br/><br/>';
			
		?>
 
 
	
	</body>
</html>