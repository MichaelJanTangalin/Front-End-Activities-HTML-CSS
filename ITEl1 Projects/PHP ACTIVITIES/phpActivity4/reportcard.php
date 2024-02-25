<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="mystyle/mystyle1.css"/>
    <title>Report Card</title>
</head>
	<body class = "bodyBackground2">
		<div id="wrapper">
		<?php
			$printFname = $_POST['fname'];
			$printlname = $_POST['lname'];
			$printMi = $_POST['mi'];
			$printMonth = $_POST['txtmonth'];
			$printDay = $_POST['txtday'];
			$printYear = $_POST['txtyear'];
			$printYearlvl = $_POST['txtyearlvl'];
			$printSection = $_POST['section'];
			$printGradePeriod = $_POST['gradingperiod'];
			$printSchool = $_POST['school'];
			
			$currentYear = 2021;
			
			$currentAge =  $currentYear - $printYear;
			
			//SUBJECTS
			$printSubject1 = $_POST['subject1'];
			$printSubject2 = $_POST['subject2'];
			$printSubject3 = $_POST['subject3'];
			$printSubject4 = $_POST['subject4'];
			$printSubject5 = $_POST['subject5'];
			$printSubject6 = $_POST['subject6'];
			
			//SUBJECT-GRADES
			
			$printSubGrade1 = $_POST['subject1Grade'];
			$printSubGrade2 = $_POST['subject2Grade'];
			$printSubGrade3 = $_POST['subject3Grade'];
			$printSubGrade4 = $_POST['subject4Grade'];
			$printSubGrade5 = $_POST['subject5Grade'];
			$printSubGrade6 = $_POST['subject6Grade'];
			
			$printTotalGrade = $printSubGrade1 + $printSubGrade2 + $printSubGrade3 + $printSubGrade4 + $printSubGrade5 + $printSubGrade6;
			$printAverageGrade = $printTotalGrade/6;
		?>
		
		<center>
		
			<table border = "1" width="400">
				<tr>
					<th><h1>STUDENT REPORT CARD</h1></th>
				</tr>
					<tr><td><?php echo "<b>Student Name: </b>"."$printlname, ".$printFname." $printMi.".'<br/><br/>'?></td></tr>
					<tr><td><?php echo "<b>Year Level: </b>".$printYearlvl.'<br/><br/>'?></td></tr>
					<tr><td><?php echo "<b>Section: </b>".$printSection.'<br/><br/>'?></td></tr>
					<tr><td><?php echo "<b>Date of Birthday: </b>".$printMonth." $printDay, ".$printYear.'<br/><br/>'?></td></tr>
					<tr><td><?php echo "<b>Age: </b>".$currentAge." Year(s) Old".'<br/><br/>'?></tr>
				
				<tr colspan = "2">
					<td >
					<table border = "1" class="tdTable" width="400">
					<tr>
						 <th colspan = "2" bgcolor = "black" class="thTable"><?php echo"$printSchool"?></th>
					</tr>
					
					<tr>
						<th>SUBJECT</th>
						<th>GRADE</th>
						
					</tr>
				<tr>
					<td><?php echo $printSubject1 ?></td>
					<td><?php echo $printSubGrade1?></td>
				</tr>
				
				<tr>
					<td><?php echo $printSubject2 ?></td>
					<td><?php echo $printSubGrade2?></td>
				</tr>
				
				<tr>
					<td><?php echo $printSubject3 ?></td>
					<td><?php echo $printSubGrade3?></td>
				</tr>
				
				<tr>
					<td><?php echo $printSubject4 ?></td>
					<td><?php echo $printSubGrade4?></td>
				</tr>
				
				<tr>
					<td><?php echo $printSubject5 ?></td>
					<td><?php echo $printSubGrade5?></td>
				</tr>
				
				<tr>
					<td><?php echo $printSubject6 ?></td>
					<td><?php echo $printSubGrade6?></td>
				</tr>
					</table>
					</td>
				</tr>
				
				<tr>
					<td><br/><?php echo "<b>Grading Period: </b>".$printGradePeriod?><br/><br/></td>
				</tr>
				
				<tr>
					<td><br/>
					
					<?php echo "<b>Remarks: </b>";
					
						if($printAverageGrade >= 95.99 and $printAverageGrade <=100){
							echo "EXCELLENT";
						}else if ($printAverageGrade >= 90.99 and $printAverageGrade <=94.99){
								echo "VERY GOOD";
						}else if ($printAverageGrade >= 85.99 and $printAverageGrade <=89.99){
								echo "GOOD";
						}else if($printAverageGrade >= 75.99 and $printAverageGrade <=84.99){
								echo "PASSED";
						}else {
							echo "FAILED";
						}
					
					?><br/><br/></td>
				</tr>
				
				<tr>
					<td><br/><?php echo "<b>Average Grade: </b>".$printAverageGrade?><br/><br/></td>
				</tr>
			
			
			</table >
			
			
			
			
				<h4>REMARKS:</h4>
				<p>95 to 100 => EXCELLENT</p>
				<p>90 to 94 => VERY GOOD</p>
				<p>85 to 89 => GOOD</p>
				<p>75 to 84 => PASSED</p>
				<p>Below 75 => FAILED</p>
				
		
		</center>
		</div>
	</body>
</html>