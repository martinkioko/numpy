<?php
	include'connection.php';
if($_GET['deactivate'])
{
	$query=mysqli_query($conn,"UPDATE login SET status='INACTIVE' WHERE login_id='".$_GET['deactivate']."'");
	if($query)
	{
		header('location:users.php');
	}
}
?>
