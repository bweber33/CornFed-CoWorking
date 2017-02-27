<?php

include('DBhelper.php');

  $email = $_SESSION['login'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $company_name = test_input($_POST["company_name"]);      
    $job_title = test_input($_POST["job_title"]);  
    
  } 
  
   
        
            
    $sql1 = "UPDATE member 
            SET work_status = '$emp_status'
            WHERE email = '$email';";
            
    $sql2 = "UPDATE member 
            SET work_status = '$emp_status'
            WHERE email = '$email';";
            
           
    
        if ($db->query($sql) && $db->query($sql2)=== TRUE) { 
      ?>
            <script language="javascript" type="text/javascript">
        			alert('Thank you for keeping us updated!');
        		  window.location = '/z-Milestones/profile.php';
        		</script>
      	<?php
        } else { ?>
            <script language="javascript" type="text/javascript">
        			alert('Sorry but we did not collect your information. Please allow us to correct the issue. Thank you!');
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