<?php include "header_student.php";?>
<center>
<br/><h3>Questions</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Student Questions to Candidates</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="question_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Display Name</label></td>
    <td><input type="text" name="display_name" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>

<tr><td><label>Question</label></td>
    <td><textarea cols='30' rows='10' type="text" name="qn" value="qn"/>Question...</textarea>
    </td>
</tr>
<tr>
    <td><label>Select Candidate for question</label></td>
    <td><select name="cand_id" id="cand_id" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Candidate</option>
    <option value="1">First Candidate</option>
    <option value="2">Second Candidate</option>
    </select></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Post" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("fullname","req","Please enter student fullname"); 
 frmvalidator.addValidation("fullname","maxlen=50");
</script>
        </fieldset>
        </div>
        
<?php
include'connection.php';
	$member=mysqli_query($conn,"select * from questions");
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
			$id=$mb->display_name;
			$name=$mb->qn;
			$course=$mb->cand_id;
			$yos=$mb->ans;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$course.'</td>';
	echo '<td>'.$yos.'</td>';

		echo "</tr>";
		}
		echo'</table>';
	}
?>
</center>
<?php include "footer.php";?>
