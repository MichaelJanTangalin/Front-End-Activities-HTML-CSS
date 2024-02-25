<!DOCTYPE html>
<html>
<head>
    <title>Arrays</title>
    
</head>
	<body>
		<?php
			echo "NOT ARRAY:<br/><br/>";
			$a = "Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday";
			echo $a;
			echo "<br/><br/>";
			echo "ARRAYS<br/>";
			$arraylist = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
			
			echo $arraylist[1];
			
			
			echo "<br/><br/>";
			
			echo "USING FOR EACH IN ARRAYS<br/><br/>";
			
			foreach ($arraylist as $day){
				echo "Day: $day <br/>";
			}
			
			echo "<br/><br/>";
			echo "DROP DOWNS USING ARRAY<br/><br/>";
		?>
		
		
		<select name="txtday">
			<?php
			
			
			foreach ($arraylist as $day){
				
				echo "<option value='$day'>$day</option>";
			}
			?>
		
		</select>
		
		
	</body>
</html>