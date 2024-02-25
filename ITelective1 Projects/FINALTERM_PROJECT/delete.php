<?php
	include("myconnections.php");
	$id = $_GET['a'];
	$deletesql = "DELETE from tbl_participants where id = '$id'";
	mysqli_query ($con,$deletesql);
	mysqli_close ($con);
	
	include("view.php");
?>