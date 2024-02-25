<!DOCTYPE html>
<html>
<head>
    <title>Student's Grade Entry</title>
	<link rel="stylesheet" href="mystyle/mystyle1.css"/>
</head>
	<body class = "bodyBackground1">
		<center>
		<form method="POST" action="reportcard.php">
		<h1>REPORT CARD TEMPLATE</h1>
			<table border = "1">
				<tr>
					<th>Lastname</th>
					<td><input type="text" name="lname" /></td>
					<th>Firstname</th>
					<td><input type="text" name="fname" /></td>
					<th>Mi</th>
					<td><input type="text" name="mi" /></td>
				</tr>
				<tr>
					<th>Date of Birth</th>
					<td>
						<select id = "MONTH"name="txtmonth">
						<?php 
						$arrayMonth = array("JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER");
							echo "<option>-Month(array)-</option>";
							foreach ($arrayMonth as $month){
								echo "<option value = '$month'>$month</option>";		
							}
						?>
						</select>
						
						
						<select id = "DAY" name="txtday">
						<?php 
							echo "<option>-Day(Looping)-</option>";
							for($dayNum=1; $dayNum<=31; $dayNum++){
								echo "<option value = '$dayNum'>$dayNum</option>";
							}
						?>
						</select>
						
						<select id = "YEAR" name="txtyear">
						<?php 
						echo "<option>-Year(Looping)-</option>";
						$yearNum=2022;
						while($yearNum>1941){
						$yearNum--;
							echo "<option value = '$yearNum'>$yearNum</option>";
						}
						?>
						</select>
					</td>
				</tr>
				
				<tr>
					<th>YEAR LEVEL</th>
					<td>
						<select id = "YEARLEVEL" name="txtyearlvl">
						<?php
						$arrayYearLevel = array("GRADE 1", "GRADE 2", "GRADE 3", "GRADE 4", "GRADE 5", "GRADE 6");
							echo "<option>-Level(array)-</option>";
								foreach ($arrayYearLevel as $YearLevel){
									echo "<option value = '$YearLevel'>$YearLevel</option>";
								}
							
						?>
						</select>
					</td>
					<th>Section</th>
						<td><input type="text" name="section"/></td>
					<th>Grading Period</th>
						<td><input type="text" name="gradingperiod"/></td>
				</tr>
				
				<tr>
						<th>Name of School</th>
						<td colspan = "3"><input type="text" name="school" size = "86"/></td>
				</tr>
					
			</table>
					<br/>
					<br/>
					
			<table border = "1">
				<tr>
					<th>Subject</th>
					<th>Grade</th>
				</tr>
				
				<tr>
					<td><input type="text" name="subject1"/></td>
					<td><input type="number" name="subject1Grade" placeholder = "0"/></td>
				</tr>
				
				<tr>
					<td><input type="text" name="subject2"/></td>
					<td><input type="number" name="subject2Grade" placeholder = "0"/></td>
				</tr>
				
				<tr>
					<td><input type="text" name="subject3"/></td>
					<td><input type="number" name="subject3Grade" placeholder = "0"/></td>
				</tr>
				
				<tr>
					<td><input type="text" name="subject4"/></td>
					<td><input type="number" name="subject4Grade" placeholder = "0"/></td>
				</tr>
				
				<tr>
					<td><input type="text" name="subject5"/></td>
					<td><input type="number" name="subject5Grade" placeholder = "0"/></td>
				</tr>
				
				<tr>
					<td><input type="text" name="subject6"/></td>
					<td><input type="number" name="subject6Grade" placeholder = "0"/></td>
				</tr>
			</table>
					<br/>
				<button type="submit">Submit</button>
			</form>
		</center>
	</body>
</html>