<!DOCTYPE html>
<html>
<head>
    <title>IF AND ELSE COMPARISON</title>
    
</head>
	<body>
		<?php
		
			/*
				$a == $b Equal
				$a <> $b Not Equal
				$a < $b Less than
				$a > $b	Greater than
				$a <= $b Less than or equal to
				$a >= $b Greater than or equal to
			*/
			
			$a = 5;
			$b = 5;
			
			if($a == $b){
				echo "a and b are equal";
			}elseif($a < $b){
				echo "True";			
			}else{
				echo "invalid!";
			}
		?>
	</body>
</html>