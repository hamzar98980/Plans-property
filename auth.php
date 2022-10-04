<?php
ob_start();
include 'dbconfig.php';
include 'Layout/navbar.php';
// include 'functions.php';

if(empty($_SESSION['id'])){
  header("Location: index.php");

}


if(verified_check() == '1'){
  header("Location: dashboard.php");
}





$uid = $_SESSION['id'];
  $ch = date("Y-m-d H:i:s");



  date_default_timezone_set("Asia/Karachi");
  // echo $uid;
  $sql_t = "SELECT * from s_auth where `user_id` = '$uid' ORDER BY `s_auth`.`auth_id` DESC";
  $res = mysqli_query($con,$sql_t);
  $r = mysqli_fetch_assoc($res);
  if(mysqli_num_rows($res)>0){
    $auth = $r['auth_time'];
    $vopt = $r['auth_code'];

  // echo '<br>';
  $minutes_to_add = 90;
  $ch = date("Y-m-d H:i:s");
  // echo $ch.' curr<br>';

  

  $time = new DateTime($auth);
  $time->add(new DateInterval('PT' . $minutes_to_add . 'S'));
  
  $stamp = $time->format('Y-m-d H:i:s');
}



?>

<style>
  .img1{
    height: 550px;
    width: 100%;
  }
</style>


<div class="container">
  <div class="row">

    <div class="card-body"><br>
      
      <h3 class="text-center t1"><b> Otp Verification </b></h3>
          <br>
      <div class="row">

      <div class="col-sm-6">
        <img src="assets/images/otp2.jpg" alt="" srcset="" class="img1">
      </div>
          <div class="col-sm-4">
                  <form action="authverifiy.php" method="post">
                    <div class="form-group">
                        <label for="">Otp Code</label>
                        <input type="text" name="auth" class="form-control">
                        
                        <?php 
                        if(isset($_REQUEST['msg'])){
                          echo '
                        <small class="text-danger">'.$_REQUEST['msg'].'</small>
                        ';
                        }
                        ?>

                        <input type="hidden" name="verify" value="1" class="form-control">

                    </div>
                      
                    <button name="btn_sub" class="btn btn-outline-success" type="submit">Verified!</button>
                          
                          &nbsp;&nbsp;
                          <?php                    

                          if(isset($_GET['resend'])){
                            $sql_inss = "DELETE from s_auth where `user_id` = '$uid'";
                            if($con->query($sql_inss)){
                               echo '<a href="authmailing.php" class="btn btn-outline-primary">Resesnd</a>';
                         
          
                            }
                          
                          }
                          if(!isset($_REQUEST['resend'])){
                            echo '<div id="countdown"></div>';
                     
                          }              
                        ?>
                                         </form>
                
          </div>
          
      </div>
    
  </div>



</div>
</div>








<!-- 

<script src="https://code.jquery.com/jquery-3.3.1.min.js">
  </script> -->



  <?php 
  include 'Layout/footer.php';
     if(!isset($_GET['resend'])){
     
      echo '<script>

      var timeleft = 90;
      var downloadTimer = setInterval(function(){
        if(timeleft <= 0){
          clearInterval(downloadTimer);
          document.getElementById("countdown").innerHTML = "Finished";
        } else {
          document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
        }
        timeleft -= 1;
      }, 1000);
      </script>';
    }
    header( "refresh:90;url=auth.php?resend=10" );
  
  
  ?>
