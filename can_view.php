<?php 
//include "admin_auth.php";
session_start();
include "header_student.php";?>
<center>
<h3>Candidate Profiles</h3>
<?php
include'connection.php';
	$member=mysqli_query($conn,"select * from candidate");
	if(mysqli_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
		echo '<table><tr>
<td width="100px">ID</td>		
<td width="100px">FULLNAME</td>
<td width="100px">POSITION</td>
<td width="100px">ABOUT</td>
<td width="100px">VOTE</td>
</tr>';
 while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->cand_id;
			$name=$mb->fullname;
			$pos=$mb->position;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$vote.'</td>';
	
	echo "</tr>";
		}
		echo'</table>';
	}
?>

        </div>

</center>
<?php include "footer.php";?>
