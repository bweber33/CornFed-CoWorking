<?php
  
    include('DBhelper.php');

  
        $sql = "SELECT firstname, lastname, email, phone, message_text FROM message";
        $result = $db->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<strong>From: </strong>" . $row["firstname"]. " " . $row["lastname"]. 
                " (" . $row["email"]. ") <br><strong> Phone: </strong>"
                . $row["phone"]. "<br><strong> Message: </strong><br />"
                . $row["message_text"] . "<hr><br />";
            }
        } else {
            echo "0 results";
        }
        
        $db->close();
        

?>