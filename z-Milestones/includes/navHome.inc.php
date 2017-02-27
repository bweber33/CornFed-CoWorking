<body>
	<!-- Brandon Weber
	     default.html
	     INFO2900.6A
	     Brown, Rosas, Paschall, McCune
	     12/30/16
	-->
	<header id="defaultBanner" class="col-md-12">
		<div class="col-md-3">	
		</div>
			<img src="images/logo2.png" height="400" width="1200" alt="CornFed Coworking" class="col-md-6  img-responsive" />
		<div class="col-md-3">	
		</div>
	</header>
	<nav class="navbar-default" style="margin-bottom: 50px;">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <p>
		  	<?php
		  		//echo "LOGIN " . $_SESSION['login'];
		  		if(!isset($_SESSION['login'])){ ?>
					  <a class="navbar-brand" href="#login-modal" data-toggle="modal" title="Login"><i class="fa fa-user" aria-hidden="true"></i></a>
						<a class="navbar-brand" href="#register-modal" data-toggle="modal" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
					<?php
					} else { 
					  echo "<i>Hello, " . $_SESSION['login'] . "!</i>  "; ?>
					  <a href="_scripts/logout.php"  class="navbar-brand" title="sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
					  <a href="/z-Milestones/profile.php" class="navbar-brand" title="Profile"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
					  <?php
					  
					} 
					
					if(isset($_SESSION['emp'])){ 
						echo "<i>Hello, " . $_SESSION['emp'] . "!</i>  "; ?>
					  <a href="_scripts/logout.php" class="navbar-brand" title="sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
					  <a href="/z-Milestones/admin.php" class="navbar-brand" title="Admin"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>
					  <?php
					  
					} 
		  	
		  	?>
		  	<!--<a class="navbar-brand" href="#login-modal" data-toggle="modal" title="Login"><i class="fa fa-user" aria-hidden="true"></i></a>-->
		  	<!--<a class="navbar-brand" href="#register-modal" data-toggle="modal" title="Register"><i class="fa fa-user-plus" aria-hidden="true"></i></a>-->
		  	<!--<span class="navbar-brand profileNavLink">-->
		  	<!--	Hello <i><a href="profile.php" id="profileNavLink">Brandon</a>!</i>-->
		  	<!--</span>-->
		  </p>
		  
		</div>
		
		  <ul class="nav navbar-nav navbar-right">
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
			<?php
		  	
		  		if(!isset($_SESSION['login'])){ ?>
					  <li><a href="book.php" class="navFonts" id="book">Book Room</a></li>
					<?php
					} else { ?>
					  <li><a href="book.php" class="navFonts">Book Room</a></li>
					  <?php
					}
		  	
		  	?>
			<!--<li><a href="book.php" class="navFonts">Book Room</a></li>-->
		  </ul>
		</div>
	</nav>
	
<div class="container">