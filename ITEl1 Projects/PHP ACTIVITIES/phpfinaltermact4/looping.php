<!DOCTYPE html>
<html>
<head>
    <title>Looping</title>
    
</head>
	<body>
		<?php
		echo "FOR LOOPS: <br/>";
			for($i=1; $i<=10; $i++){
				echo $i;
				echo "<br/>";
				echo "<input type = 'text' name = 'txtsample'>";
				echo "<br/>";
			}
			
			echo "<br/><br/>";
		?>
		
		<?php
			echo "WHILE LOOPS: <br/>";
			$i=1;
			
			while($i<=10){
				$i++;
				
				echo $i;
				echo "<br/>";
				
			}
			
			
			
		?>
		
		
	</body>
</html>