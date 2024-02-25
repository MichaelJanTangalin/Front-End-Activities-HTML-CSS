<?php
include ("myconnections.php");
$lname = $_GET ['a'];
$fname = $_GET ['b'];
$mi    = $_GET ['c'];

?>

<h1>WELCOME PARTICIPANT</h1>
<h2><?php echo $lname.' '.$fname.' '.$mi?></h2>
<?php
	$insertsql = "INSERT into tbl_participants(lname,fname,mi) VALUES('$lname','$fname','$mi')";
	mysqli_query($con, $insertsql);
	mysqli_close($con);
?>

<?php
	include("view.php");
?>