<?php
  include('DBhelper.php');
  
  function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $suffix = test_input($_POST["suffix"]);
   
    if (empty($_POST["reg_F_name"])) {
      $nameErr = "First name is required";
    } else {
      $firstname = test_input($_POST["reg_F_name"]);
    }
    
    if (empty($_POST["reg_L_name"])) {
      $nameErr = "Last name is required";
    } else {
      $lastname = test_input($_POST["reg_L_name"]); 
    }
    
    if (empty($_POST["reg_email"])) {
      $nameErr = "Email is required";
    } else {
      $email = test_input($_POST["reg_email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
    }
    
    if (empty($_POST["reg_phone"])) {
      $nameErr = "Phone number is required";
    } else {
      $phone = test_input($_POST["reg_phone"]); 
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////
    if (empty($_POST["reg_password"])) {
      $nameErr = "Password is required";
    } else {
      $password = test_input($_POST["reg_password"]);   
    
        if (empty($password)){
          $error = true;
          $passError = "Please enter password.";
        } else if(strlen($password) < 6) {
          $error = true;
          $passError = "Password must have atleast 6 characters.";
          
        }
    
      // password encrypt using SHA256();
      $passwordHash = hash('sha256', $password);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
    
    $month = test_input($_POST["month"]);      
    
    
    $day = test_input($_POST["day"]);      
    
    
    $year = test_input($_POST["year"]); 
    
    $work_status = test_input($_POST['reg_emp_status']);
    
    
  } 
  
   
        
            
    $sql1 = "INSERT INTO member (suffix, firstname, lastname, email, password, work_status) 
            VALUES ('$suffix', '$firstname', '$lastname', '$email', '$passwordHash', '$work_status');";
            
            
    
    $sql2 = "INSERT INTO party (email, phone_number, dob_month, dob_day, dob_year) 
            VALUES ('$email', '$phone', '$month', '$day', '$year');";

        if ($db->query($sql2) && $db->query($sql1) === TRUE) { 
          session_start();
          $_SESSION['login'] = $email;
          header("location: ../profile.php");
          
        } else { ?>
            <script language="javascript" type="text/javascript">
        			alert('Sorry but we did not collect your information. Please allow us to correct the issue. Thank you!');
        		  window.location = '/z-Milestones/default.php';
        		</script>
        	<?php
        }
        
        
        
    $db->close();
?>