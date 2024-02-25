<!DOCTYPE html>
<html>
<head>
	<title>USER DEFINE FUNCTION</title>
</head>
	<body>
		<?php
			function sumof($val1, $val2){
				
				$result = $val1 + $val2;
				
				return $result;
			}
			
			
		?>
		
		<?php
			function diffof($val1, $val2){
				
				$val3 = $val1 - $val2;
				
				$result = "The difference of $val1 and $val2 is ".$val3;
				
				return $result;
			}
		?>
	</body>
</html>