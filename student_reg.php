<?php include "header.php";?>
<center>
<br/><h3>Registration</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Student Registration Form</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="reg1_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Firstname</label></td>
    <td><input type="text" name="firstname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Lastname</label></td>
    <td><input type="text" name="lastname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Course</label></td>
    <td><select name="course" id="course" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Choose course</option>
    <option value="BCS">Bachelor Of Computer Science</option>
    <option value="IT">Bachelor Of Information Technology</option>
    <option value="ACC">Bachelor Of Accouncy</option>
    <option value="INS">Bachelor Of Insurance</option></select></td>
</tr>
<tr><td><label>Registration Number</label></td>
    <td><input type="text" name="stud_id" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Year Of study</label></td>
    <td><select name="yos" id="yos" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Choose year Of Study</option>
    <option value="1">First Year</option>
    <option value="2">Second Year</option>
    <option value="3">Third Year</option>
    <option value="4">Fourth Year</option></select></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Next" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("course","req","Please enter student course"); 
 frmvalidator.addValidation("course","dontselect=000","You don't select course");
 frmvalidator.addValidation("stud_id","req","Please enter your registration number"); 
 frmvalidator.addValidation("stud_id","maxlen=50");
 frmvalidator.addValidation("yos","req","Please enter year of study"); 
 frmvalidator.addValidation("yos","dontselect=000","You don't select Year Of study");
</script>
        </fieldset>
        </div>
</center>
<?php include "footer.php";?>
