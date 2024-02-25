<?php
	include("myconnections.php");
	$id = $_GET['a'];
	$lname = $_GET ['b'];
	$fname = $_GET ['c'];
	$mi    = $_GET ['d'];
	
	$updatesql = "UPDATE tbl_participants set lname='$lname', fname='$fname', mi='$mi' where id = '$id'";
	mysqli_query($con, $updatesql);
	mysqli_close($con);
	
	include("view.php"); 
?>