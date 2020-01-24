<?php
include "connection.php";
session_start();
$username1	= $_POST['cusername'];
$username	= $_POST['username'];
$pass 		= md5($_POST['password']);


if(!$username1 || !$pass || !$username){
$error="Please fill empty fields";
include"change_pass.php";
exit();
}

		
	//Adding the escape character
	$username = addslashes($username);
	$password = addslashes($pass);
	
	
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$pass);
	
$sql = 'SELECT * FROM login WHERE username="'.$_POST['cusername'].'" AND status="ACTIVE"';
$result = mysqli_query($conn,$sql);

			if (mysqli_num_rows($result)==1){
	    //Username Successful
		$sql = 'UPDATE login SET username="'.$_POST['username'].'",
		                         password="'.md5($_POST['password']).'"
		        WHERE username="'.$_POST['cusername'].'"' ;
        $result = mysql_query($sql);
        $msg="username and password Successful changed";
        include "change_pass.php";
			
	        }
					
			else{
			$error="Incorrect username or password";
			include "change_pass.php";
			//exit();
			}
	
	
?>
