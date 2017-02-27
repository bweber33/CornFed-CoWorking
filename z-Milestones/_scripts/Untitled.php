<?php
  include('DBhelper.php');
  
  if (isset($_POST['loginForm'])){
    $email = test_input($_POST['login_email']);
    $password = test_input($_POST['login_password']);
    $remember = test_input($_POST['remember']);
    $passHash = hash('sha256', $password);
    
    
    $sql = "SELECT email, password FROM member WHERE email = $email and password = $passHash;";
    
    $result = $db->query($sql);
    
  if ($result->num_rows == 1) {  
        if(isset($_POST['remember'])){
          setcookie('login', $email, time() + (86400 * 30), "/", "", true);
        }
        session_start();
        $_SESSION['login'] = $email;
        header("location: ../profile.php");
        
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



