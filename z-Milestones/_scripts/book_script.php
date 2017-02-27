<?php

  require_once('DBhelper.php');
  
  
  function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["room"])) {
      $nameErr = "Please select a conference room.";
    } else {
      $room = test_input($_POST["room"]);
    }
      
    $smartboard = test_input($_POST["Smartboard"]);
    $projector = test_input($_POST["tv"]);
    $tv = test_input($_POST["projector"]);
    $phone = test_input($_POST["phone"]);
    $laptop = test_input($_POST["Laptops"]);
    
    
    if (empty($_POST["month"])) {
      $nameErr = "Start Time is required";
    } else {
      $month = test_input($_POST["month"]);
    }
    
    if (empty($_POST["day"])) {
      $nameErr = "Start Time is required";
    } else {
      $day = test_input($_POST["day"]);
    }
    
    if (empty($_POST["year"])) {
      $nameErr = "Start Time is required";
    } else {
      $year = test_input($_POST["year"]);
    }
    
    if (empty($_POST["timeStart"])) {
      $nameErr = "Start Time is required";
    } else {
      $timeStart = test_input($_POST["timeStart"]);
    }
    
    if (empty($_POST["timeEnd"])) {
      $nameErr = "Start Time is required";
    } else {
      $timeEnd = test_input($_POST["timeEnd"]);
    }
    
    if (empty($_POST["F_Name"])) {
      $nameErr = "Start Time is required";
    } else {
      $firstname = test_input($_POST["F_Name"]);
    }
    
    if (empty($_POST["L_Name"])) {
      $nameErr = "Start Time is required";
    } else {
      $lastname = test_input($_POST["L_Name"]);
    }
    
    if (empty($_POST["email"])) {
      $nameErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
    }
    
    if (empty($_POST["comments"])) {
      $nameErr = "Start Time is required";
    } else {
      $comments = test_input($_POST["comments"]);
    }
    
    
    
    $sql = "INSERT INTO booked (room, smartboard, tv, projector, phone, laptop, month, day, year, start_time, end_time, firstname, lastname, email, comments) 
            VALUES ('$room', '$smartboard', '$projector', '$tv', '$phone', '$laptop', '$month', '$day', '$year', '$timeStart', '$timeEnd', '$firstname', '$lastname', '$email', '$comments');";

        if ($db->query($sql) === TRUE) { ?>
            <script language="javascript" type="text/javascript">
        			alert('Thank you! We will review your request and contact you if there is a confilct in times.');
        		  window.location = '/z-Milestones/default.php';
        		</script>
        	<?php
        } else { ?>
            <script language="javascript" type="text/javascript">
        			alert('Sorry but we did not collect your information. Please allow us to correct the issue. Thank you!');
        		  window.location = '/z-Milestones/book.php';
        		</script>
        	<?php
        }
    
    
    
    
  }
        
    $db->close();

?>