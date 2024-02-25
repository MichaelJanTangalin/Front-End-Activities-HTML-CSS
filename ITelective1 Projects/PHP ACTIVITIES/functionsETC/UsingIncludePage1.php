<!DOCTYPE html>
<html>
<head>
	<title>Using Include Page1</title>
	<?php
		include("UsingIncludePage2.php");
	?>
</head>
	<body>
		<?php
			echo $lastname;
			echo "<br/>";
			echo $firstname;
			echo "<br/>";
			echo $mi;
			echo "<br/>";
			echo $Guitars[0];
			echo "<br/>";
			echo $Guitars[1];
			echo "<br/>";
			echo $Guitars[2];
		?>
	</body>
</html>