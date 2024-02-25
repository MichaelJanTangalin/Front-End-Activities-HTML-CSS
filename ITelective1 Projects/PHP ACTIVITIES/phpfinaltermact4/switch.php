<!DOCTYPE html>
<html>
<head>
    <title>Switch Case</title>
    
</head>
	<body>
		<?php
			$option="D";
			
			switch($option){
				case 'A';
				 echo "Your answer is letter A(Book)";
					break;
				case 'B';
				 echo "Your answer is letter B(Note Book)"; 
					break;
				case 'C';
				 echo "Your answer is letter C(Ball Pen)";
					break;
				default:
				 echo "Please Enter A B and C ONLY!";
					break;
			}
		?>
	</body>
</html>