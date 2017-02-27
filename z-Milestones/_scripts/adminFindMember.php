<?php 

  include('DBhelper.php');
  
  $sql = "SELECT id, firstname, lastname, email FROM member";
        $result = $db->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<strong>ID: </strong>" . $row["id"] . 
                "<br /><strong>Name:</strong>". $row["firstname"]. " " . $row["lastname"]. 
                "<br /> <strong>Email: </strong>" . $row["email"]. "<br /><br />";
            }
        } else {
            echo "0 results";
        }
        
  $db->close();
    
  // if(isset($_POST["search"])){
  //   $email = test_input($_POST["findEmail"]);
  //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //         $emailErr = "Invalid email format"; 
  //       }
        
  //   $sql = "SELECT id, email, firstname, lastname, suffix, education, job_title FROM member WHERE email = $email
  //           UNION 
  //           SELECT dob_month, dob_day, dob_year, gender, company_name, ethnicity FROM party WHERE email = $email;";
  //   $result = $db->query($sql);
    
  //   if ($result->num_rows > 0) {
  //     while ($row = $result->fetch_assoc()){
  //       $id = $row['id'];
  //       $email = $row['email'];
  //       $fname = $row['firstname'];
  //       $lname = $row['lastname'];
  //       $suffix = $row['suffix'];
  //       $edu = $row['education'];
  //       $month = $row['dob_month'];
  //       $day = $row['dob_day'];
  //       $year = $row['gender'];
  //       $gender = $row['company_name'];
  //       $company = $row['job_title'];
  //       $title = $row['ethnicity'];
  //     }
  //   }
    
  //   $db->close();
    
    
  //   }else{
  //     $id = "";
  //     $email = "";
  //     $fname = "";
  //     $lname = "";
  //     $suffix = "";
  //     $edu = "";
  //     $month = "";
  //     $day = "";
  //     $year = "";
  //     $gender = "";
  //     $company = "";
  //     $title = "";
  //   }
    
  //   function test_input($data) {
  //     $data = trim($data);
  //     $data = stripslashes($data);
  //     $data = htmlspecialchars($data);
  //     return $data;
  //   }
    
?>  
    
