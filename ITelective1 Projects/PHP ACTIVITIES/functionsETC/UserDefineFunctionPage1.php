<!DOCTYPE html>
<html>
<head>
	<title>USER DEFINE FUNCTION</title>
</head>
	<?php
		include("UserDefineFunctionPage2.php");
	?>
	<body>
		<?php
			$a = 10;
			$b = 5;
			
			echo sumof($a, $b);
			echo "<br/>";
			echo "<br/>";
			echo diffof($a, $b);
		?>
		
		
	</body>
</html>