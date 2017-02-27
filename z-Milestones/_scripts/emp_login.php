<?php
  include('DBhelper.php');
  
  
  if (isset($_POST['empLogin'])){
    
    $email = test_input($_POST['emp_email']);
    $password = test_input($_POST['emp_password']);
    $remember = test_input($_POST['remember']);
    
     $sql = "SELECT email, password FROM employee WHERE email = '$email' and password = '$password';";
    
    $result = $db->query($sql);
    
  if ($result->num_rows == 1) {  
        if(isset($_POST['remember'])){
          setcookie('login', $email, time() + (86400 * 7), "/", "", true);
        }
        session_start();
        $_SESSION['emp'] = $email;
        header("location: ../admin.php");
        
      } else {?>
          <script language="javascript" type="text/javascript">
      			alert('Invalid Email or Password');
      		  window.location = '/z-Milestones/default.php';
      		</script>
      	<?php
      }
        
    } 
  

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
        
    $db->close();
?>



