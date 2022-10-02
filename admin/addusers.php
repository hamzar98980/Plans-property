<?php
include 'config.php';
    function validate($data){
  
      $data = trim($data);
  
      $data = stripslashes($data);
  
      $data = htmlspecialchars($data);
  
      return $data;
  
   }
   $head="Location: users.php?";
   if(empty($_POST['name']))
      {
      $head=$head."&name=Required*";    
      }
      else
      {
          if(!preg_match("/^[a-zA-Z-']*$/",$_POST['name']))
          {
          
              $head=$head."&name=Alphabets Only";    
          }
          else
          {
              $name = validate($_POST['name']);
          }
      }
      
   if(empty($_POST['pwd']))
  {
      $head=$head."&pwd=Required*";    
  }    
  else
  {
          $pass = validate($_POST['pwd']);
  }
  if(empty($_POST['email']))
      {
      $head=$head."&email=Required*";    
      }
      else
      {
  
          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
              $head=$head."&email=Invalid email format";    
          }
          else
          {
              $email = validate($_POST['email']);
              $sql = "SELECT * from a_user where u_email = '$email'";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) === 1) {
      
                  $head=$head."&email=Email is already register";    
              } 
              }
      }
  
      if(empty($_POST['contact']))
      {
      $head=$head."&contact=Required*";    
      }
      else
      {
          if(!preg_match("/^[0-9]{11}$/",$_POST['contact'])){
              $head=$head."&contact=Invalid Number";    
          }
          else{
              $cont = $_POST['contact'];
              $sql = "SELECT * from a_user where u_contact = '$cont'";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) === 1) {
      
                  $head=$head."&cont=Number is already register";    
              }  }
  
      }
  
      if(empty($_POST['cnic']))
      {
      $head=$head."&cnic=Required*";    
      }
      else
      {
          if(!preg_match("/^[0-9]{13}$/",$_POST['cnic'])){
              $head=$head."&cnic=Invalid Nic Number";    
          }
          else{
              $cnic = validate($_POST['cnic']);
              $sql = "SELECT * from a_user where u_cnic= '$cnic'";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) === 1) {
      
                  $head=$head."&cnic=Id Card is already register";    
              } }
      }
      if(isset($_POST['dest']))
      {
        if($_POST['dest']=="Choose..."){          $head=$head."&dest=Required*";    
      }
      else
      {
              $dest = validate($_POST['dest']);
      }
        }  
      if(empty($_POST['city']))
      {
          $head=$head."&city=Required*";    
      }    
      else
      {
              $city = validate($_POST['city']);
      }
      
      if(empty($_POST['address']))
      {
          $head=$head."&add=Required*";    
      }    
      else
      {
              $add = validate($_POST['address']);
      } 

      
    if($head=="Location: users.php?"){  
        $sql_insert = "INSERT into a_user(u_name,u_email,u_pass,u_dest,u_contact,u_cnic,u_addres,u_city)
    values ('$name','$email','$pass','$dest','$cont','$cnic','$add','$city')";
  
    if($con->query($sql_insert)){
         header("Location: user-display.php");
        }
    else{
        header("Location: user-display.php?delete=Cannot Added");
    }
  }
  else{
 header($head);
  }
    
?>