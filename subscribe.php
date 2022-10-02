<?php
      

      if(isset($_POST['ssubmit']))
      {
          $sub = $_POST['subscribe'];
            
         
          $sql = "SELECT * from subscriber where s_email = '$sub'";
      
          $result = mysqli_query($con, $sql);
      
          if (mysqli_num_rows($result) === 1) {
      
              header("Location: contact.php?success=Already Subscribed Our Newsletter");;
      
      
          }
          else
          {
              $sql_insert = "INSERT INTO `subscriber` (`s_email`) VALUES ('$sub')";
      
          }
      }
    ?>