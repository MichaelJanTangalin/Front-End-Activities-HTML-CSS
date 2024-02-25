<html>
	<head>
		<title>View Participants</title>
	</head>

	<?php
		include("myconnections.php");
		include ("myInclude.php");
		$id = $_GET['a'];
		$retrieve_participants = "SELECT * from tbl_participants where id='$id'";
		$result = $con->query ($retrieve_participants);
	?>
	<br/>
	<br/>
	<div id = "CertificateBG">
	<hr width = "900" size="4" color="black">
	<hr width = "900" size="4" color="black">
		<h1>CERTIFICATE OF COMPLETION</h1>
	<hr width = "900" size="4" color="black">	
	<hr width = "900" size="4" color="black">
	<br/>
		<h3><i>This is to certify that</i></h3>
		<?php
			while ($row = mysqli_fetch_array($result))
			{
				$a=strtoupper ("$row[lname]");
				$b=strtoupper ("$row[fname]");
				$c=strtoupper ("$row[mi]");
			}
		?>
		
		<h1><?php echo $a.', '.$b.' '.$c ?></h1>
		<h3><i>has completed his years of living</i></h3>
		
		<br/>
		<img src="PICS/RIBBON.png" alt="medal" width="300" height="200">
		<br/>
		<br/>
		<?php echo date('<b> \O\n j\t\h \D\a\y \o\f F Y </b>')?>
		<br/>
		<br/>
		<br/>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<button id = "DirrectPrintButton" onclick="window.print();" class="noPrint">Print</button>
		<button id = "BackButton" onClick="window.location.href ='participants.php'" class='noPrint'>Back</button>
</html>