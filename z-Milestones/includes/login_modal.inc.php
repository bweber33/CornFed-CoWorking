<?php

	if(isset($_COOKIE['login'])){
		$email = $_COOKIE['login'];
		
		echo 
		"<script>
				document.getElementById('login_email').value = '$email';
			</script>";
			
		
	}

?>

<div class="modal fade" data-focus-on="input:first" id="login-modal" tabindex="100" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" name="loginForm" action="_scripts/Untitled.php" method="POST">
	      <div class="modal-header modal-header-bg">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Login: </h4>
	      </div>
	      <div class="modal-body">
		    	<div class="form-group">
					  <label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
					  <div class="col-sm-7">
						    <input type="email" class="form-control" id="login_email" name="login_email" placeholder="Email" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label for="inputPassword3" class="col-sm-3 control-label">Password:</label>
					  <div class="col-sm-7">
					    <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password" required="required">
					  </div>
					</div>
					<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox" name="remember"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
		    </div>
			  <div class="modal-footer modal-footer-height">
					<div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
					  	<!--<button type="submit" class="btn btn-default" data-toggle="modal" data-dismiss="modal" href="#register-modal"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>-->
					    <button type="submit" name="loginForm" class="btn btn-lgBule" onclick="return validateLogin()">Sign in</button>
					  </div>
					</div>
			  </div>
      </form>
    </div>
  </div>
</div>