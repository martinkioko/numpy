<?php
include "connection.php";
session_start();
$username	= $_POST['username'];
$pass 		= md5($_POST['password']);


if(!$username || !$pass){
$error="Please fill empty fields";
include"login.php";
exit();
}

		
	//Adding the escape character
	$username = addslashes($username);
	$password = addslashes($pass);
	
	
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$pass);
	
$result =mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");

			if (mysqli_num_rows($result)==1){
	    //Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['login_id'];
			$_SESSION['SESS_NAME'] 		= $member['username'];
			$_SESSION['SESS_RANK'] 	    = $member['rank'];
			session_write_close();
			
			if($member['rank']=='administrator'){
			header("location: login_reg.php");
			}
			
			else if($member['rank']=='student'){
			header("location: student.php");
			}
			else if($member['rank']=='candidate'){
			header("location: candidate.php");
			}
			
	        }
					
			else{
			$error="Incorrect username or password";
			include "login.php";
			//exit();
			}
	
	
?>
