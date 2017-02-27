<div class="modal fade" id="register-modal" tabindex="100" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" name="registerForm" action="_scripts/register.php" method="POST">
	      <div class="modal-header modal-header-bg">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Register: </h4>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
					  <label class="col-sm-3 control-label">Suffix:</label>
					  <div class="col-sm-7">
					    <select class="form-control" id="suffix" name="suffix">
							  <option value="Mr">Mr.</option>
							  <option value="Mrs">Mrs.</option>
							  <option value="Ms">Ms.</option>
							  <option value="Dr">Dr.</option>
							</select>
					  </div>
					</div>
	      	<div class="form-group">
					  <label class="col-sm-3 control-label" autofocus="autofocus">First Name*:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="reg_F_name" name="reg_F_name" placeholder="First Name" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Last Name*:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="reg_L_name" name="reg_L_name" placeholder="Last Name" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Email*:</label>
					  <div class="col-sm-7">
					    <input type="email" class="form-control" id="reg_email" name="reg_email" placeholder="Email" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Phone*:</label>
					  <div class="col-sm-7">
					    <input type="text" class="form-control" id="reg_phone" name="reg_phone" placeholder="XXXXXXXXXX">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Password*:</label>
					  <div class="col-sm-7">
					    <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Password" required="required">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Work Status*:</label>
					  <div class="col-sm-7">
					    <!--<input type="email" class="form-control" id="reg_companyName" placeholder="Company">-->
					    <select class="form-control" id="reg_emp_status" name="reg_emp_status">
							  <option value="employed">Employed</option>
							  <option value="student">Student</option>
							  <option value="freelance">Freelance</option>
							  <option value="unemployed">In Transition</option>
							</select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Date of Birth:</label>
					  
					  <?php include('includes/date_select.inc.php'); ?>
					
					</div>
	      </div>
	      <div class="modal-footer modal-footer-height">
	        <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-lgBule modal-dismiss" onclick="return validateRegister()">Register</button>
	      </div>
      </form>
    </div>
  </div>
</div>