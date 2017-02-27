<?php 

  include 'DBhelper.php';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["emailRemove"])) {
      $nameErr = "Email is required";
    } else {
      $email = test_input($_POST["emailRemove"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
    }
  
  }
  
  $sql1 = "DELETE FROM member WHERE email = '$email';";
  $sql2 = "DELETE FROM party WHERE email = '$email';";
 
  if ($db->query($sql2) && $db->query($sql1) === TRUE) {?>
        <script language="javascript" type="text/javascript">
    			alert('The member has been removed!');
    		  window.location = '/z-Milestones/admin.php';
    		</script>
    	<?php
    } else { ?>
        <script language="javascript" type="text/javascript">
    			alert('Error, no change made.');
    		  window.location = '/z-Milestones/admin.php';
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


