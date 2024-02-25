<!DOCTYPE html>
<html>
<head>
    <title>Logical Operators and IF ELSE IF AND ELSE</title>
    
</head>
	<body>
		<?php
		
			/*
				$a and $b - And
				$a or $b  - Or
				$a xor $b - Xor
				!$a	- Not
				$a && $b - And
				$a || $b - Or
			*/
			
			$age = 18;
			$gender = 'M';
			
			if($age >= 18 and $gender == 'M'){
				echo "You are qualified!";
			}else{
				echo "You are NOT qualified!";
			}
		?>
	</body>
</html>