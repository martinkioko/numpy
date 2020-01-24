<?php
	include'connection.php';
if($_GET['activate'])
{
	$query=mysqli_query($conn,"UPDATE login SET status='ACTIVE' WHERE login_id='".$_GET['activate']."'");
	if($query)
	{
		header('location:users.php');
	}
}
?>
