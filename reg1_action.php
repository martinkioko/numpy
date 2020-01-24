 <?php
     
include "connection.php";

$name 		= $_POST['firstname'];
$name2 		= $_POST['lastname'];
$name3		= $_POST['username'];
$pass 		= md5($_POST['password']);
$course 	= $_POST['course'];
$yos	    = $_POST['yos'];
$id 	    = $_POST['stud_id'];


if(!$name || !$id || !$yos || !$course || !$name2){
$error="Please fill empty fields";
include"student_reg.php";
exit();
}
$host="localhost";
$user="root";
$pass="";
$db = "poll";
$conn=mysqli_connect($host,$user,$pass,$db);
$sq = mysqli_query($conn,"SELECT stud_id FROM student WHERE stud_id='$id'");
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The student ID already exist,register another</h4></center></font>";
		unset($id);
		include('student_reg.php');
		exit();
		}

// $sq = mysql_query('SELECT username FROM login WHERE username="'.$_POST['username'].'"');
// $exist = mysql_num_rows($sq);
	
// 		if($exist==1){
// 		$nam="<center><h4><font color='#FF0000'>The username or exist, peak another.</h4></center></font>";
// 		unset($id);
// 		include('student_reg.php');
// 		exit();
// 		}		


$sql=mysqli_query($conn,'INSERT INTO student(stud_id,firstname,lastname,username,course,yos)
         VALUES("'.$_POST['stud_id'].'","'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'","'.$_POST['course'].'","'.$_POST['yos'].'")');
         
$sql2 =mysqli_query($conn, 'INSERT INTO login(username,password)
         VALUES("'.$_POST['username'].'","'.md5($_POST['password']).'")');           




	if(!$sql && !$sql2){
	die("Error on mysql query".mysql_error());
	}
	else{
	header("location: login.php");
	}
                
 ?>

