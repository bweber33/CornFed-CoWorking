<?php
	require_once('DBhelper.php');
	
	if (empty($_POST["F_Name"])) {
      $nameErr = "First name is required";
    } else {
    	$feild_fname = test_input($_POST["F_Name"]);
    }
    
	if (empty($_POST["L_Name"])) {
      $nameErr = "Last name is required";
    } else {
    	$feild_lname = test_input($_POST["L_Name"]);
    }
    
	if (empty($_POST["email"])) {
      $nameErr = "Last name is required";
    } else {
    	$feild_email = test_input($_POST["email"]);
    }
	
	if (empty($_POST["phone"])) {
      $nameErr = "Y name is required";
    } else {
    	$feild_phone = test_input($_POST["phone"]); 
    }
    
	if (empty($_POST["message_text"])) {
      $nameErr = "Please enter a message so that we know the best way to assist you. Thank you!";
    } else {
    	$feild_message = test_input($_POST["message_text"]);
    }
	
	$sql = "INSERT INTO message (firstname, lastname, email, phone, message_text)
					VALUES ('$feild_fname', '$feild_lname', '$feild_email', '$feild_phone', '$feild_message');";
	
	
		if ($db->query($sql) === FALSE) { ?>
     <script language="javascript" type="text/javascript">
			 alert('Message failed. Please, send an email to 360WebDevelopmentTeam@mccneb.edu');
			 window.location = '/z-Milestones/default.php';
		 </script>
		<?php
    } else { ?>
			<script language="javascript" type="text/javascript">
				alert('Your message has been submited. Thank you!' );
		    window.location = '/z-Milestones/default.php';
			</script>
		<?php
    }


	function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
      
    
    $db->close();

?>