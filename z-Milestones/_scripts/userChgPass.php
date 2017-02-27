<?php
  include('DBhelper.php');
  
  //$email = "rm@msn.com";
  $email = $_SESSION['login'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["newPass"])) {
      $nameErr = "Password is required";
    } else {
      $password = test_input($_POST["newPass"]);   
    
        if (empty($password)){
          $error = true;
          $passError = "Please enter password.";
        } else if(strlen($password) < 6) {
          $error = true;
          $passError = "Password must have atleast 6 characters.";
          
        }
    
      // password encrypt using SHA256();
      //$passwordHash = hash('sha256', $password);
    }
    
  } 
  
   echo $email;
        //sha2('$passwordHash', 256)
            
    $sql = "UPDATE member 
            SET password = sha2('$password', 256)
            WHERE email = '$email';";
            
            
        try {
        if ($db->query($sql) === TRUE) { 
            echo "<script>
        			      alert('Password has been updated!');
        		        window.location = '/z-Milestones/profile.php';
        		      </script>";
        	
        } else { 
           echo  "<script>
        			      alert('Sorry but we did not collect your information. Please allow us to correct the issue. Thank you!');
        		        window.location = '/z-Milestones/profile.php';
        		      </script>";
        	
        }
        } catch (Exception $ex) {
          echo 'Errror: ' . $ex->message;
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
    $db->close();

?>