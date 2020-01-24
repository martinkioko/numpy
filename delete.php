<?php
	include'connection.php';
if($_GET['delete'])
{
	$query=mysqli_query($conn,"DELETE FROM student WHERE stud_id='".$_GET['delete']."'");
	$query=mysqli_query($conn,"DELETE FROM login WHERE username='".$_GET['delete']."'");
	$query=mysqli_query($conn,"DELETE FROM candidate WHERE cand_id='".$_GET['delete']."'");
	if($query)
	{
		header('location:users.php');
	}
}
?>
