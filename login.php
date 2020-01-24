<?php include "header.php";?>
<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                    <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
      <!-- the login form-->
                        <form action="login_action.php" method="post" id="myform">
                        <fieldset>
                       <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                <input name="login" type="submit" value="login" class="btn btn-lg btn-success btn-block">
                 

<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
</script>
</fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            </div>       


<?php include "footer.php";?>
