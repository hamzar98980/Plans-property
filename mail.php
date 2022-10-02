<?php
      include 'dbconfig.php';
      $nm = $_POST['name'];
      $em = $_POST['email'];
      $ph = $_POST['phone'];
      $sub = $_POST['subject'];
      $ms = $_POST['message'];
   
    $sql = "SELECT * from tb_mail where e_email = '$em'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {

        header("Location: index.php?success=Already Subscribed Our Newsletter");;


    }
    else{
        $sql_insert = "INSERT INTO `tb_mail` (`e_name`, `e_email`, `e_num`, `e_sub`, `e_des` ) VALUES ('$nm', '$em','$ph','$sub','$ms')";
  
        if($con -> query($sql_insert))
        {
            $to_email = $em;
            $subject = "Thanks For Subscribe Our NewsLetter";
            $body ="Our team member will contact you shortly. Thankyou for reaching us!";
            $htmlContent = file_get_contents("Mailtemp.html");
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            if (mail($to_email, $subject, $htmlContent, $headers)) {
            header("Location: index.php?error=1 row Added");
            } else {
                header("Location: index.php?success=Email sending failed...");
            } 
    
        }
        else{
            header("Location: index.php?error=1 row Added");
    
        }
    


        header("Location: contact.php?success=Thanks For Subscribing Our Newsletter");
        



    }



?>