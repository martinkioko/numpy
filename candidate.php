<?php 
//include "admin_auth.php";
session_start();
include "header_candidate.php";?>
<div id="cover">
<div id="content">
<?php
include'connection.php';
	$member=mysqli_query($conn,"SELECT questions.qn_id,questions.display_name,questions.qn,questions.cand_id,questions.ans FROM questions,candidate WHERE questions.cand_id=candidate.cand_id");
	if(mysqli_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
echo '<table><tr>
<td width="100px">DISPLAY NAME</td>		
<td width="100px">QUESTION</td>
<td width="100px">CANDIDATE</td>
<td width="100px">ANSWER</td>
</tr>';
 while($mb=mysqli_fetch_object($member))
		{	
		    $qnid=$mb->qn_id;
			$id=$mb->display_name;
			$name=$mb->qn;
			$course=$mb->cand_id;
			$yos=$mb->ans;
		
	echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td width=500>'.$name.'</td>';
	echo '<td>'.$course.'</td>';
	echo '<td width=500>'.$yos.'</td>';
	echo "<td><a href=answer.php?edit=".$course."&&qn=".$qnid.">Answer</a></td>";
	echo "</tr>";
		}
		echo'</table>';
	}
?>
        </div>

</div>
</div>
<?php include "footer.php";?>
