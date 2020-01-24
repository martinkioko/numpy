<?php include "header_student.php";?>
<div id="cover">
<div id="content">
<br/><h3>Answers</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Answers to Student's questions</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="answer_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
				
<?php
include'connection.php';
$cid=$_GET['edit'];
$qid=$_GET['qn'];

$result=mysqli_query($conn,"SELECT display_name,ans,cand_id,qn_id,qn FROM questions  WHERE qn_id= '".$_GET['qn']."'");


$rows=mysqli_fetch_array($result);
?>				
<tr><td><label>Asked By</label></td>
    <td><input type="text" name="display_name" value="<?php echo $rows['display_name']; ?>" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>

<tr><td><label>Question</label></td>
    <td><textarea cols='30' rows='10' type="text" name="qn" value="<?php echo $rows['qn']; ?>"/><?php echo $rows['qn']; ?></textarea>
    </td>
</tr>
<tr><td><label>Answer</label></td>
    <td><textarea cols='30' rows='10' type="text" name="ans" value="qn"/>Answer...</textarea>
    </td>
</tr>
<input type="hidden" name="qn_id" value="<?php echo $_GET['qn']; ?>"/>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Answer" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
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
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$course.'</td>';
	echo '<td>'.$yos.'</td>';

		echo "</tr>";
		}
		echo'</table>';
	}
?>
</div>

</div>
<?php include "footer.php";?>
