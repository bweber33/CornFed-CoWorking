<?php
  
    include('DBhelper.php');

  
        $sql = "SELECT room, month, day, year, start_time, end_time, firstname, lastname, email, smartboard, tv, projector, phone, laptop, comments FROM booked";
        $result = $db->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h4>" . $row["room"] . " is requsted on " . $row["month"] . " " . $row["day"] . ", " . $row["year"] . " from " . $row["start_time"] . " until " . $row["end_time"] . 
                " by: </h4>" . $row["firstname"]. " " . $row["lastname"]. " (" . $row["email"]. ") 
                <br><h4> What's Needed: </h4>
                <strong> Smartboard: </strong>". $row["smartboard"]. 
                "<br /><strong>TV: </strong>" . $row["tv"]. 
                "<br /><strong>Projector: </strong>" . $row["projector"].
                "<br /> <strong>Phone: </strong>" . $row["phone"].
                "<br /><strong>Laptops: </strong>" . $row["laptop"]. 
                "<br /><br /><strong>Comments:</strong><br />" . $row["comments"] . "<hr><br />";
            }
        } else {
            echo "No bookings at this time.";
        }
        $db->close();
        

?>