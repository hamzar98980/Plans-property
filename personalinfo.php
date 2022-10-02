<?php
ob_start();
include 'dbconfig.php';
include 'functions.php';
include 'encode.php';
$title="Personal Info";
include('Layout/navbar.php');
?>


 
  <!-- <link rel="stylesheet" href="admin/assets/css/style.css"> -->
  <link rel="stylesheet" href="admin/assets/css/components.css">


<style>
    .profile-widget .profile-widget-header {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
    }
    .t1{
        color: #4c7ce3;
    }
</style>


<?php 
function generateNumericOTP($n) {

    $generator = "1357902468";
    
    $result = "";
    
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
    // Return result
    return $result;
    }


?>

  <div class="main-content">
        <section class="section">
            <br>
            <br>
          <div class="section-body">
            <div class="container">
            <div class="row">

                <?php 
                    $sid = $_SESSION['id'];
                    $sql_g = "SELECT * from s_regist where s_id = '$sid'";
                    $res = mysqli_query($con,$sql_g);
                    $r = mysqli_fetch_assoc($res);

                    $name = $r['s_name'];
                    $name_imp = explode(" ",$name,2);
                    $first_name = $name_imp[0];
                    $last_name = $name_imp[1];
                    $verified = $r['s_verified'];

                    //  $last_name[1];
                    //  echo $last_name;
                ?>
         
            <div class="col-6 col-sm-6 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?php echo $_SESSION['pic']?>" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Properties</div>
                        <div class="profile-widget-item-value"><?php echo no_of_rows_bytable('s_add','where ag_id = '.$sid) ?></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value"><?php echo no_of_rows_bytable('s_follow','where to_follow = '.$sid) ?></div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value"><?php echo no_of_rows_bytable('s_follow','where from_follow = '.$sid) ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name"><?php echo $r['s_name'] ?> <div class="text-muted d-inline font-weight-normal">
                        <div class="slash"></div> Basic Profile
                      </div>
                    </div>
                    <p><?php echo $r['s_name'] ?> is an verified agent with Plans property dealers you can buy and sell with them and you can also conatct with them for any query regarding our agent or any misbehaving and fraud or scam you can report this agent with us.</div>
                  <!-- <div class="card-footer text-center pt-0">
                    <div class="font-weight-bold mb-2 text-small">Follow Hasan On</div>
                    <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-github">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div> -->
                </div>


            </div>
                <!-- <br> -->
                <!-- <br> -->
                <!-- <br> -->
            <div class="col-sm-6">
                <br>
                <!-- <br> -->
                <div class="card card-body">
                    <?php 
                    if(isset($_REQUEST['update'])){
                        echo '<form action="" method="POST">';
                    }
                    ?>
                    <h3 class="text-center t1"><b> Personal Info </b></h3>
                        <br>
                    <div class="row">
                        <div class="col-sm-6">
                                <di class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="st_name" value="<?php echo $first_name ?> " <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?> >
                                </di>
                        </div>
                        <div class="col-sm-6">
                                <di class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" name="lst_name" value="<?php echo $last_name ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </di>
                        </div>
                   </div>
                    <br>
                   <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">WhatsApp Number</label>
                                    <input type="text" class="form-control" name="num" value="<?php echo $r['s_num'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Id Card Number</label>
                                    <input type="text" class="form-control" name="cnic" value="<?php echo $r['s_cnic'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                   </div>
                    
                   <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="pass" value="<?php echo $r['s_pass'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="text" class="form-control" name="cpass" value="<?php echo $r['s_pass'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                   </div>
                   <!-- <br> -->
                   <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $r['s_email'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                   </div>

                   <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" class="form-control" value="<?php echo $r['s_gen'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="number" name="age" class="form-control" value="<?php echo $r['s_age'] ?>" <?php if(!isset($_REQUEST['update'])){ echo 'readonly';} ?>>
                                </div>
                        </div>
                   </div>
                   <div class="row">
                    <br>
                        <div class="col-md-12  text-right">
                    

                            <?php 
                                if($verified == 0){
                                    //echo '<a href="personalinfo.php?btn"><button class="btn btn-outline-success" type="submit">Verified Your Email</button></a>  ';
                                    echo '
                                    <a href="authmailing.php"><button class="btn btn-outline-success" type="submit">Verified Your Email</button></a>  ';
                                }
                                

                                if(isset($_REQUEST['btn'])){
                                    $sm = generateNumericOTP(4);
                                    $uid = $_SESSION['id'];
                                    $ch = date("Y-m-d H:i:s");

                                
                                    $sql_ins = "INSERT into s_auth(`user_id`,`auth_code`,`auth_time`) values
                                    ($uid,$sm,now())";
                                    if($con->query($sql_ins)){
                                        header("Location: auth.php?time=1");
                                    }

                                }
                            ?>



                            <?php if(!isset($_REQUEST['update'])){
                             ?>

                             <?php 
                             ?>
                             <a href="personalinfo.php?update"><button class="btn btn-outline-primary">Update Now!</button></a> 
                             
                            <?php }else{
                                echo '<button name="upd_profile" class="btn btn-outline-primary">Update </button>
                                ';
                             } ?>

                        </div>
                   </div>
                   <?php 
                    if(isset($_REQUEST['update'])){
                        echo '</form>';
                    }
                   ?>

                </div>
            </div>





            </div>
            </div>
</section>
  </div>



<?php 
if(isset($_REQUEST['upd_profile'])){
    $la_name = $_REQUEST['lst_name'];
    $st_name = $_REQUEST['st_name'];

    $name = $st_name.' '. $la_name;
    // echo $name;
    $pass = $_REQUEST['pass'];
    $confirm_pass = $_REQUEST['cpass'];
    $num = $_REQUEST['num'];
    $gen = $_REQUEST['gender'];
    $cnic = $_REQUEST['cnic'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];

    $sql_q = "UPDATE s_regist set s_name = '$name',s_email = '$email',s_age = '$age',s_gen = '$gen',
    s_cnic = '$cnic',s_num = '$num' where s_id = '$sid'";
    if($con->query($sql_q)){
        header("Location:personalinfo.php");

    }else{
        echo '<script>alert("User did not update")</script>';
    }

    
}


?>





<br>
<br>


<?php 
include('Layout/footer.php');
?>