<?php 
//include "admin_auth.php";
include "header_student.php";?>
<div id="cover">
<div id="content">
<h4>Hellow,welcome to the polls voting system.&nbsp; <br /></h4>
<br/><h3>Make a vote.</h3>
  <div id="login">
<table width="100%">
<form action="student_vote.php" name="vote" method="post" id="myform">
<tr>
<td align="left"><img src="candidates/cand1.PNG" width="200px" height="100%"></td>
<td align="left">
<input type="radio" name="cand1" value="1" size="10"/>MOHAMMED HUSSEIN- CHAIR
<br/><br/>
<input type="radio" name="cand1" value="2" size="10"/>ABDI OSMAN- CHAIR<br/>
</td>
<td align="left"><img src="candidates/cand2.PNG" width="200px" height="100%"></td>
</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="left"><?php global $msg; echo $msg;?>
                <?php global $error; echo $error;?>
</td>
</tr>
<tr>
<td align="left"><img src="candidates/cand3.PNG" width="200px" height="100%"></td>
<td align="left">
<input type="radio" name="vice1" value="3" size="10"/>DUKE MAKANA - VICE<br/><br/>
<input type="radio" name="vice1" value="4" size="10"/>NAFISA NOOR - VICE <br/>
</td>
<td align="left"><img src="candidates/cand4.PNG" width="200px" height="100%"></td>
</tr>
<tr>
<td align="center"><input type="submit" value="CAST VOTE" name="submit"/></td>
</tr>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select president candidate to vote for.");
 frmvalidator.addValidation("vice1","req","Please select vice candidate to vote for.");  
</script>
</table>
        </div>

</div>
</div>
<?php include "footer.php";?>