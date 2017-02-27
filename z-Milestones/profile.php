<?php 
	include('includes/heading.inc.php');
	require_once('_scripts/DBhelper.php');
	
	
?>

<body>
<!-- Brandon Weber
     default.html
     INFO2900.6A
     Brown, Rosas, Paschall, McCune
     12/30/16
-->

	<?php include('includes/navOther.inc.php');?>
	
	<main class="panel padding border">
		<div>
			<div class="row">
				<div class="col-md-12 col-lg-4 pull-left">	
					<h3>Welcome <?php echo $_SESSION['login'];?>!</h3>
					<img alt="Brand" src="images/logoBust.png" height="375" width="258" class="adminLogo img-responsive hidden-sm hidden-xs"/>
				</div>
				<div class="col-md-12 col-lg-8">
					<ul class="nav nav-tabs nav-justified">
					  <li role="presentation" class="active"><a href="#userUpdates" data-toggle="tab">Update Profile</a></li>
					  <li role="presentation"><a href="#userEvents" data-toggle="tab">Booked Events</a></li>
					  <!--<li role="presentation"><a href="#userMessages" data-toggle="tab">Messages</a></li>-->
					</ul>
					<div class="tab-content">
						<!--Profile Update Start-->
						<div role="tabpanel" class="tab-pane fade in active tabPanel" id="userUpdates">
							<!--Password Form-->
							<form class="form-horizontal" action="_scripts/memberChgPass.php" method="POST">
								<h4> Password: </h4>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">Change Password</label>
							    <div class="col-sm-7"> 
							      <input type="password" class="form-control" id="newPass" name="newPass" placeholder="New Password">
							    </div>
							    <div class="col-sm-2">
							      <button type="submit" class="btn btn-default pull-right">Update</button>
							    </div>
							  </div>
							</form>
							<!--Password Form End-->
							
							<!--Work Status Form-->
							<form class="form-horizontal" action="_scripts/memberWrkSts.php" method="POST">
							  <hr>
							  <h4> Employment Information: </h4>
							  <br />
							  <div class="form-group">
								  <label class="col-sm-3 control-label">Work Status</label>
								  <div class="col-sm-7">
								    <select class="form-control" id="work_status" name="work_status">
										  <option value="employed">Employed</option>
										  <option value="student">Student</option>
										  <option value="freelance">Freelance</option>
										  <option value="unemployed">In Transition</option>
										</select>
								  </div>
								  <div class="col-sm-2">
									    <button type="submit" class="btn btn-default pull-right disabled">Update</button>
									 </div>
								</div>
							</form>
							<!--Company/Title Form-->
							<form class="form-horizontal" action="_scripts/memberEmpUpdate.php" method="POST">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
							    <div class="col-sm-7">
							      <input type="text" class="form-control" id="company_name" name="company_name" placeholder="CornFed CoWorking">
							    </div>
							    <div class="col-sm-2">
							      <button type="submit" class="btn btn-default pull-right disabled">Update</button>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-3 control-label">Job Title</label>
							    <div class="col-sm-7">
							      <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Web Developer">
							    </div>
							    <div class="col-sm-2">
							      <button type="submit" class="btn btn-default pull-right disabled">Update</button>
							    </div>
							  </div>
							</form>
							<!--Employment Form End-->
							
							<!--About User Form-->
							<form class="form-horizontal">
							  <hr>
							  <h4> Tell us About You: </h4>
							  <br />
							  <div class="form-group">
								  <label class="col-sm-3 control-label">Gender</label>
								  <div class="col-sm-7">
								    <select class="form-control" id="gender" name="gender">
										  <option value=""></option>
										  <option value="employed">Male</option>
										  <option value="student">Female</option>
										</select>
								  </div>
								  <div class="col-sm-2">
									    <button type="submit" class="disabled btn btn-default pull-right">Update</button>
									 </div>
								</div>
							<!--	<div class="form-group">
								  <label class="col-sm-3 control-label">Ethnicity</label>
								  <div class="col-sm-7">
								    <select class="form-control" id="ethnicity" name="ethnicity">
										  <option value=""></option>
										  <option value="hispanic">Hispanic</option>
										  <option value="white">White</option>
										  <option value=""></option>
										  <option value=""></option>
										</select>
								  </div>
								  <div class="col-sm-2">
									    <button type="submit" class="disabled btn btn-default pull-right">Update</button>
									 </div>
								</div>
								<div class="form-group">
								  <label class="col-sm-3 control-label">Education</label>
								  <div class="col-sm-7">
								    <select class="form-control" id="reg_emp_status" name="reg_emp_status">
										  <option value=""></option>
										  <option value="student">Accociates</option>
										  <option value="employed">Bachelors</option>
										  <option value="student">GED</option>
										  <option value="student">Masters</option>
										  <option value="employed">Phd</option>
										</select>
								  </div>
								  <div class="col-sm-2">
									    <button type="submit" class="disabled btn btn-default pull-right">Update</button>
									 </div>
								</div>-->
							</form>
							<!--About User Form End-->
						</div>
						<!--Profile Update End-->
						
						<!--Profile Update Start-->
						<div role="tabpanel" class="tab-pane fade tabPanel" id="userEvents">
							<h3 class="text-center">Feature Comming Soon!</h3>
						</div>
						<!--Profile Update End-->
						
						<!--Profile Update Start
						<div class="disabled" id="userMessages">
							
						</div>
						Profile Update End-->
						
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<?php include('includes/footer.inc.php')?>
</body>
</html>


