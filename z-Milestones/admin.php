<?php 
	include('includes/heading.inc.php');
	require_once('_scripts/DBhelper.php');

    
  if(isset($_POST["search"])){
    $email = test_input($_POST["findEmail"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
        
    $sql = "SELECT id, email, firstname, lastname, suffix, education, work_status, job_title FROM member WHERE email = $email
            UNION 
            SELECT dob_month, dob_day, dob_year, gender, company_name, ethnicity FROM party WHERE email = $email;";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()){
        $id = $row['id'];
        $email = $row['email'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $suffix = $row['suffix'];
        $edu = $row['education'];
        $month = $row['dob_month'];
        $day = $row['dob_day'];
        $year = $row['dob_year'];
        $gender = $row['gender'];
        $work_status = $row['work_status'];
        $company = $row['company_name'];
        $title = $row['job_title'];
        $ethnicity = $row['ethnicity'];
        $edu = $row['education'];
      }
    }
    
    $db->close();
    
    
    }else{
      $id = "";
      $email = "";
      $fname = "";
      $lname = "";
      $suffix = "";
      $edu = "";
      $month = "";
      $day = "";
      $year = "";
      $gender = "";
      $work_status = "";
      $company = "";
      $title = "";
      $ethnicity = "";
      $edu = "";
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
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
					<h3>Welcome <?php echo $_SESSION['emp']?>!</h3>
					<img alt="Brand" src="images/logoBust.png" height="375" width="258" class="adminLogo img-responsive hidden-sm hidden-xs"/>
				</div>
				<div class="col-md-12 col-lg-8">
					<ul class="nav nav-tabs nav-justified">
					  <li role="presentation" class="active"><a href="#adminMessages" data-toggle="tab">Messages</a></li>
					  <li role="presentation"><a href="#bookedRooms" data-toggle="tab">Room Bookings</a></li>
					  <li role="presentation"><a href="#adminUpdates" data-toggle="tab">Member Updates</a></li>
					</ul>
					<div class="tab-content tabPanel">
						<!--Admin Messages  Start-->
						<div role="tabpanel" class="tab-pane fade in active" id="adminMessages">
							<?php include '_scripts/adminMsgQuery.php'; ?>
						</div>
						<!--Admin Messages End-->
						
						<!--Admin Room Bookings Start-->
						<div role="tabpanel" class="tab-pane fade" id="bookedRooms">
							<?php include '_scripts/adminBookQuery.php'; ?>
						</div>
						<!--Admin Room Bookings End-->
						
						<!--Admin Member Updates Start-->
						<div role="tabpanel" class="tab-pane fade" id="adminUpdates">
							<form class="form-horizontal" action="_scripts/adminRemoveMember.php" method="POST">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-3 control-label">Remove Member</label>
							    <div class="col-sm-7">
							      <input type="email" class="form-control" id="emailRemove" name="emailRemove" placeholder="Member Email">
							    </div>
							    <div class="col-sm-2">
							      <button type="submit" class="btn btn-default pull-right">Remove</button>
							    </div>
							  </div>
							</form>
							<hr>
							<form class="form-horizontal" action="result" method="POST">
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">Find Member</label>
							    <div class="col-sm-7">
							      <input type="email" class="form-control" id="findEmail" name="findEmail" placeholder="Member Email">
							    </div>
							    <div class="col-sm-2">
							      <button type="submit" name="search" class="btn btn-default pull-right disabled">Search</button>
							    </div>
							  </div>
								<!--Find Member Result Display-->
							</form>
							<div id="memberList">
								<?php include '_scripts/adminFindMember.php';?>
							</div>
						</div>
						<!--Admin User Updates End-->
					</div>
				</div>
			</div>
		</div>
	</main>
	

	
	<?php include('includes/footer.inc.php')?>
</body>
</html>


