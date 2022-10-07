<?php
ob_start();
include('encode.php');
if(empty($_REQUEST['uid'])){
  $title ="Agent Not Available";
  include('layout/navbar.php');
  echo "<img src='assets/images/404.svg' style='width:100%;margin-top:-200px;' >";
  }
    
  else
{
$encid=$_REQUEST['uid'];
$id = dect($encid);
include 'dbconfig.php';
$sql_fetch = "SELECT *,CONCAT(UCASE(LEFT(s_name, 1)),LCASE(SUBSTRING(s_name, 2))) as s_name from s_regist where s_id = '$id' and s_verified = 1";
$res = $con->query($sql_fetch);

if(mysqli_num_rows($res)==0){
  $title ="Agent Not Available";
  include('layout/navbar.php');
  echo "<img src='assets/images/404.svg' style='width:100%;margin-top:-200px;' >";
  }
else
{
    
  while ($r = $res->fetch_array()) {
    $verified = $r['s_verified'];
    $title ="Here Is our Verified Agent";
include('layout/navbar.php');


?>
<style>
    .members_details_img{
        height: 80%;
        width: 80%;
        margin-left: 30px;
    }
    .divider{
        height: 450px;
        border-left: 3px #4c7ce3 solid;
    }
    .notlist{
        text-align: center;
        color: #4c7ce3;
        
        
    }
    .owl-carousel .owl-item img {
    display: block;
    width: 370px;
    height: 200px;
    object-fit: cover;
}
.latest_properties_top_content h4 , .latest_properties_top_content p
{
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
.latest_properties_content {
    padding: 16px 10px 22px;
}
.img1{
    height: 350px;
    width: 400px;
    /* margin-left: 200px; */
}
.b_img{
    background-size:cover;
}
.add_img{
    width: 282px;
    height: 370px;
}
.btn_follow{
    width: 15%;
    border-radius: 50px;
    
}
.btn_unfollow{
    border-radius: 50px;
    width: 15%;
}
.ftitle{
    text-overflow: ellipsis;
    overflow: hidden;
    /* white-space: nowrap; */
    height: 60px;
    /* width: 150px; */
}
.ag1{
    font-family:'Times New Roman', Times, serif;
    color: #4c7ce3;
}
</style>

    <div class="page-wrapper">      
        <!--Page Header Start-->
        <section class="page-header b_img" style="background-image: url(assets/images/backgrounds/s3.jpg);">
            <div class="container">
                <div class="page-header-inner">
                    <h2>Our Agents Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Agent</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Members Details Start-->
        <section class="members_details">
            <div class="container">
            <?php if (isset($_GET['error'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_GET['error']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET['sucess'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                        <?php echo $_GET['sucess']; ?>
                                        </div>
                                    <?php } ?>                <div class="row">
                    <div class="col-xl-3 col-lg-3">

                                    <div class="members_details_left">
                            <div class="members_details_img">
                                <img src="<?php echo $r['s_pic'];?>" alt="">
                                <br>
                                <br>
                            
                                <div class="container">
                            <ul class="companies_contact_info members_details_contact_info list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:<?php
                                        if(substr($r['s_num'],0,1)=="0")
                                        {
                                            echo "92".substr($r['s_num'], 1);
                                        }
                                        else {
                                            echo "92".$r['s_num']; 
                                            } ?>"><?php if(substr($r['s_num'],0,1)=="0")
                                            {
                                                echo "92".substr($r['s_num'], 1);
                                            }
                                            else {
                                                echo "92".$r['s_num']; 
                                                }  ?></a>
                                    </div>
                                </li>
                            
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-print"></i>
                                    </div>
                                    <div class="text">
                                        <a href="#"><?php echo $r['s_cnic'] ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:<?php echo $r['s_email'] ?>"><?php echo $r['s_email'] ?></a>
                                    </div>
                                </li>
                                <br>
                                
                                <?php 
                                if($verified == 0){
                                    echo '
                                    <a href="dashboard.php?btn"><button class="btn btn-primary" type="submit">Submit</button></a>
                                    
                                    ';

                                }
                             

                                if(isset($_REQUEST['btn'])){
                                    $sm = generateNumericOTP(4);
                                    $uid = $_SESSION['id'];
                                    $ch = date("Y-m-d H:i:s");

                                
                                    $sql_ins = "INSERT into s_auth(`user_id`,`auth_code`,`auth_time`) values
                                    ($uid,$sm,now())";
                                    if($con->query($sql_ins)){
                                        header("Location: auth.php");
                                    }

                                }
                                 
          
                                
                                ?>
                            </ul> 
                            </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>

                    <div class="divider "></div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="members_details_right"> 
                            <div class="members_details_right_title">
                                <h3><?php echo $r['s_name'] ?></h3>
                                <p>Professional Verified Seller</p>
                            </div>
                            <div class="members_details_right_text">
                                <p><?php echo $r['s_name'] ?> is an verified agent with Plans property dealers you can buy
                                and sell with them and you can also contact with them for any query regarding our agent or
                                any misbehaving and fraud or scam you can report this agent with us.</p>
                            </div>
                          
                                <?php 
                                $sid = $_SESSION['id'];
                                $sql_fetch_follow = "SELECT * from s_follow where from_follow = '$sid' and to_follow = '$id'";
                                $foll = mysqli_query($con,$sql_fetch_follow);
                                if(mysqli_num_rows($foll)>0){
                                    echo '         
                                    <form action="" method="POST">
                                    <button class="btn btn-outline-info btn_unfollow" name="btn_unfollw">Following</button>
                                    </form>
                                    ';

                                    if(isset($_POST['btn_unfollw'])){
                                        $to_foll = $id;
                                        $from_fol = $_SESSION['id'];

                                        $sql_delet_fol = "DELETE from s_follow where from_follow = '$from_fol' and to_follow = '$to_foll'";
                                        if($con->query($sql_delet_fol)){
                                            header("Refresh:0");
                                        }
                                    }

                                }else{
                                    echo '         
                                    <form action="" method="POST">
                                    <button class="btn btn-outline-primary btn_follow" name="btn_follow">Follow</button>
                                    </form>
                                    ';
                                }
                             
                                ?>



                                <?php 
                                // echo $_SESSION['id'];
                                if(isset($_POST['btn_follow'])){

                                    $from_follow = $_SESSION['id'];
                                    $to_follow = $id;

                                    $sql_f = "INSERT into s_follow (from_follow,to_follow,f_time) Values
                                    ('$from_follow','$to_follow',CURRENT_TIMESTAMP)";

                                    if($con->query($sql_f)){
                                        header("Refresh:0");
                                    }
                                    
                                }
                                
                                ?>
                            
                            

                            <?php 
                            
}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Members Details End-->

        <br><br><br>

                            <?php 
                            if(agency_verified2('1','0',$id)>0 && agency_verified2('0','1',$id) == 'Approved'){
                            ?>
                            <div class="container">
                                <div class="col-sm-12">
                                    <h2 class="ag1"><b>State Agency</b></h2><br>
                                <div class="listings_two_page_content">
                                  <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                      <div class="listings_two_page_content_inner">

                                      <?php 
                                      $sql_get = "SELECT * FROM `firm_regist` where f_status = 'Approved' and agent_id = '$id'";
                                      $res = $con->query($sql_get);
                                      $r = $res->fetch_array();
                                      ?>


                                            <div class="listings_two_page_content_single">
                                              <div class="listings_two_page_main_img">
                                                  <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                                      
                                                      
                                                      <div class="listings_two_page_img">
                                                          <div class="listings_two_page_content_img_box">
                                                          <img src="<?php echo $r['fi_logo'] ?>" class="add_img" alt=""  style="height:310px ;"  width="250px">
                                                          </div>
                                                          <div class="listings_two_page_content_icon">
                                                              <i class="fa fa-heart"></i>
                                                          </div>
                                                          <div class="listingstwo_page_content_btn">
                                                      
                                                          
                                                          </div>
                                                      </div>
                                                      

                                                  </div>
                                              </div>
                                              <div class="listings_two_page_bottom_content" style="height: 310px;">
                                                  <div class="listings_two_page_bottom_content_top">
                                                      <h4 class="title"><a href="agency-agent-display.php?firm_id=<?php echo $r['fi_id'] ?>"><?php echo $r['fi_name'] ?></a></h4>
                                                      <p><?php echo $r['fi_address'] ?></p>
                                                      <p class="ftitle"><?php echo $r['f_desc']?></p> <p>..Show More</p>
                                                      <!-- <h3>Rs.<?php echo '6600'; ?><span> Sqft</span></h3> -->
                                                  </div>
                                                  <div class="listings_two_page_bottom_item">
                                                      <ul class="list-unstyled">
                                                         <a href="tel:<?php echo $r['fi_phone'] ?>"> <button class="btn btn-outline-primary">Call Now </button></a> &nbsp;&nbsp;&nbsp;
                                                         <a href="mailto:<?php echo $r['fi_email'] ?>"> <button class="btn btn-outline-primary">Email Us </button></a>
                                                          
                                                          
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                  

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>
    </div>
</div>




        <!--Latest Properties Start-->
        <section class="latest_properties member-page">
            <div class="container">

                
                <div class="block-title text-center">
                    <h4>Recently</h4>
                    <h2>Property Listed</h2>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">



                    
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 },
                            "navigation": {
                                "nextEl": ".latest_properties_next",
                                "prevEl": ".latest_properties_prev",
                                "clickable": true
                            },
                            "breakpoints": {
                                "0": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "425": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "767": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "991": {
                                    "spaceBetween": 20,
                                    "slidesPerView": 2
                                },
                                "1289": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 3
                                },
                                "1440": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 3
                                }
                            }}'>


                            <div class="swiper-wrapper">
                                
                                                    <?php 
                                     
                                       $sql_get1 = "select *, CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where s_add.ag_id = '$id '";
                                       $result1 = $con->query($sql_get1);
                                        while($row1 = $result1->fetch_array()){
                                                $a_id = $row1['a_id'];
                                        ?>

                                    <div class="swiper-slide">

                                    <div class="latest_properties_single">

                                        <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                            
                                        <?php                                       
                                       $sql_get = "select * from aimg where ai_id = '$a_id'";
                                       $result = $con->query($sql_get);
                                        while($row = $result->fetch_array()){
                                            
                                        ?>

                                                

                                            <div class="latest_properties_img" data-toggle="tooltip" data-placement="right" title="<?php if($row1['a_status']=="Approved"){ echo "Ad is Aproved";}elseif($row1['a_status']=="Pending"){echo "Wait For the Aprovel";}?>">
                                                <img src="<?php echo 'images/'.$row['i_pic'] ?>" class="add_img" alt="" >
                                                <div class="latest_properties_icon">
                                                    <?php 
                                                    if($row1['a_status']=="Approved"){
                                                        ?><i class="fa fa-check-circle"></i>
                                                    <?php 
                                                    }elseif($row1['a_status']=="Pending"){
                                                        ?>
                                                        <i class="fa fa-clock" ></i>
                                                        <?php }   ?>
                                                </div>
                                                <div class="featured_and_sale_btn">
                                                    <a href="property.php?id=<?php echo enc($row1['a_id']) ?>" class="featured_btn">view</a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?> 

                                        </div>


                                        <div class="latest_properties_content">
                                            <div class="latest_properties_top_content">
                                                <h4><?php echo $row1['a_title'] ?></h4>
                                                <p><?php echo $row1['a_loc'] ?></p>
                                                <h3>Rs.<?php echo $row1['a_price'] ?><span>Sqft</span></h3>
                                            </div>
                                            <div class="latest_properties_bottom_content">
                                                <ul class="list-unstyled">
                                                    <li><span class="icon-bed"></span><?php echo $row1['a_bad'] ?></li>
                                                    <li><span class="icon-shower"></span><?php echo $row1['a_bath'] ?></li>
                                                    <li><span class="icon-square-measument"></span><?php echo $row1['a_area'] ?>sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <?php 
                                     }                        
                                ?>

                                
                            </div>
                            <?php 
                            $sql_check= "SELECT * from s_add where ag_id = '$id'";
                            $resul = $con->query($sql_check);
                            $row = mysqli_num_rows($resul);
                            if(!$row){
                                      
                                     echo '<div class="block-title text-center">
                                     <h4>No Properties listed</h4> 
                                 
                                     </div>';

                                    echo '
                                    <div class="container">
                                    <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                    <img class="img1" src="./pictures/s3.png" alt="">    
                                    </div>
                                    <div class="col-sm-4"></div>
                                    </div>
                                    </div>
                                    ';

                                      echo '<div class="block-title text-center">
                                  
                                    <br><a href="addProperty.php" class="btn btn-primary">List A New property</a>
                                     </div>';
                                    // echo '<img src="./pictures/s2.png" alt="">';
                                    
                            }
                            ?>
                       
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

   
        <!--Latest Properties End-->
<?php 
}}
include('Layout/footer.php');
?>