<nav class="navbar navbar-default">
	  <div class="container-fluid">
  		<div class="navbar-header">
  		  <a href="default.php" class="navbar-brand" style="width: 300px;">
  			  <p><img alt="Brand" src="images/logoBust.png" height="32" width="22"/> CornFed Coworking</p>
  		  </a>
  		</div>
  		<ul class="nav navbar-nav navbar-right">
  				<?php
		  	
		  		//echo "LOGIN " . $_SESSION['login'];
		  		if(!isset($_SESSION['login'])){ ?>
					  <a class="navbar-brand" href="#login-modal" data-toggle="modal" title="Login"><i class="fa fa-user" aria-hidden="true"></i></a>
						<a class="navbar-brand" href="#register-modal" data-toggle="modal" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
					<?php
					} else { ?>
					  <a href="_scripts/logout.php"  class="navbar-brand" title="sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
					  <a href="/z-Milestones/profile.php" class="navbar-brand" title="Profile"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
					  <?php
					  
					} 
					
					if(isset($_SESSION['emp'])){  ?>
					  <a href="_scripts/logout.php" class="navbar-brand" title="sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
					  <a href="/z-Milestones/admin.php" class="navbar-brand" title="Admin"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
					  <?php
					  
					} 
		  	
		  	?>
  				<!--<li><a href="#login-modal"  data-toggle="modal" title="Login"><i class="fa fa-user" aria-hidden="true"></i></a></li>-->
  				<!--<li><a href="#register-modal"  data-toggle="modal" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>-->
  				<li class="dropdown">
  				  <a href="#" class="dropdown-toggle navFonts" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FAQ <span class="caret"></span></a>
  				  <ul class="dropdown-menu">
  					<li><a href="about.php">About Us</a></li>
  					<li class="dropdown-submenu">
  						<a tabindex="-1" href="#">Membership Rates</a>
  						<ul class="dropdown-menu">
  						  <li style="margin: auto;"><b>Information Coming Soon!</b></li>
  						  <!--<li style="margin: auto;"><b>Monthly Rate</b></li>
  						  <li>$30</li>
  						  <li><b>Annual Rate</b></li>
  						  <li>$315</li>-->
  						</ul>
  					</li>
  				  </ul>
  				</li>
  				<li class="dropdown">
  				  <a href="#" class="dropdown-toggle navFonts" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span></a>
  				  <ul class="dropdown-menu">
  					<li>Phone: 402-555-5555</li>
  					<li role="separator" class="divider"></li>
						<li>
							<a href="#contact_modal" data-toggle="modal">Send a Message</a>
						</li>
  				  </ul>
  				</li>
  				<li><a href="book.php" class="navFonts">Book Room</a></li>
  		</ul>
	  </div>
</nav>
<div class="container">
	