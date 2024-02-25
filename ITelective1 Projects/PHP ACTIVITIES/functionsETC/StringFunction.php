<!DOCTYPE html>
<html>
<head>
	<title>USER DEFINE FUNCTION</title>
</head>
	<body>
		<?php
			$fullname = "michael jan tangalin r";
			$fname = "Michael Jan";
			$lname = "Tangalin";
			$test = "abcdefg";
			$x = "ABCDE";
			$pass = "hello";
			
			echo ucwords("ucwords: ".$fullname);
			echo "<br/>";	
			echo "<br/>";	
			echo ucfirst("ucfirst: ".$fname.$lname);
			echo "<br/>";
			echo "<br/>";	
			echo "strtoupper: ".strtoupper($fname);
			echo "<br/>";
			echo "<br/>";	
			echo "strtolower: ".strtolower($x);
			echo "<br/>";
			echo "<br/>";	
			echo "substr: ".substr($test, 3,2);
			echo "<br/>";
			echo "<br/>";	
			echo "Encryption: ".md5($pass);
			echo "<br/>";
			echo "<br/>";	
			echo date("F, j, Y, g:i a");
			echo "<br/>";
			echo "<br/>";
			echo date("m.d.y");
			echo "<br/>";
			echo "<br/>";
			echo date("j, n, Y");
			echo "<br/>";
			echo "<br/>";
			echo date("Ymd");
			echo "<br/>";
			echo "<br/>";
			echo date('\i\t \i\s \t\h\e jS \d\a\y');
			echo "<br/>";
			echo "<br/>";
			echo date("D M j G:i:s T Y");
			echo "<br/>";
			echo "<br/>";
			echo date("H:m:s \m \i\s \m\o \n \t \h");
			echo "<br/>";
			echo "<br/>";
			echo date("H:i:s");
			echo "<br/>";
			echo "<br/>";
			echo date('\O\n j\t\h \D\a\y \o\f F Y');
			
		?>
	</body>
</html>