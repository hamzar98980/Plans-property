<?php 
ob_start();
include 'dbconfig.php';
include 'Layout/navbar.php';
$uid = $_SESSION['id'];

$sql_t = "SELECT * from s_auth where `user_id` = '$uid' ORDER BY `s_auth`.`auth_id` DESC";
$res = mysqli_query($con,$sql_t);
$r = mysqli_fetch_assoc($res);

  $auth = $r['auth_time'];
  $vopt = $r['auth_code'];



  $otp = $_REQUEST['auth'];


  echo $otp.'<br>';
  if($otp == $vopt){
    $vr = 1;
    $sql_ver = "UPDATE s_regist SET s_verified = '$vr' where s_id = '$uid'";
    if($con->query($sql_ver)){
      header("Location: dashboard.php");
    }
    


  }else{
    
    header("Location: auth.php?resend=10&msg=Please Enter Valid Otp");
  }


?>