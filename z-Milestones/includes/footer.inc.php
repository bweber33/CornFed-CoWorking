<?php
#footer information for CornFed Coworking 
?>
<footer>
	<div class="row text-center">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<p>&copy; Brandon Weber 2017 - This site is for educational purposes and is not a real CoWorking space</p>
		</div>
		<div class="col-md-4 text-right">
			<?php
				if(isset($_SESSION['login'])){ 
			?>
						<a href="_scripts/logout.php" title="Sign Out">Sign Out</a>
			<?php
				} else{ 
			?>		
					<a href="#emp-login-modal" data-toggle="modal" title="Employee Login">Employee Login</a>
			<?php
				}
			?>
		</div>	
	</div>
</footer>
</div>


<?php
	//Contact Modal
	include('includes/contact_modal.inc.php');
	//Login Modal
	include('includes/login_modal.inc.php');
	//Register Modal
	include('includes/register_modal.inc.php');
	//Admin Modal
	include('includes/emp_login_modal.inc.php');
?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Toggle Tooltip-->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
