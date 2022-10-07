<?php
ob_start();
include 'dbconfig.php';
include 'encode.php';
$title="Welcome to your Dashboard ";

include('Layout/navbar.php');
if(empty($_SESSION['id'])){
    header("Location: index.php");
}
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
    width: 100%;
    height: 370px;
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
<?php

    $id =  $_SESSION['id'];
    $sql_fetch = "SELECT * from s_regist where s_id = '$id'";
    $res = $con->query($sql_fetch);
    while($r = $res->fetch_array()){
        $verified = $r['s_verified'];
    

     

?>

    <div class="page-wrapper">      
        <!--Page Header Start-->
        <section class="page-header b_img" style="background-image: url(assets/images/backgrounds/s3.jpg);">
            <div class="container">
                <div class="page-header-inner">
                    <h2>Members Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Dashboard</li>
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
                                        <a href="tel:<?php echo $r['s_num'] ?>"><?php echo $r['s_num'] ?></a>
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
                                
                          
                            </ul> 
                            </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>

                    <div class="divider "></div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="members_details_right"> 
                            <div class="members_details_right_title">
                                <h3><?php echo $r['s_name'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                
                                <?php if(no_of_rows_bytable('s_add','where ag_id ='.$r['s_id'].'') >= 5){
                                    if(agency_verified('1','0')>0 && agency_verified('0','1') == 'Approved'){

                                    }else{
                                        echo '<a href="agency-registered.php"><button class="btn btn-outline-info">Registered As An Agency</button></h3></a>';
                                    }
                                
                                } ?>
                                

                                <p>Professional Verified Seller</p>
                            </div>
                            <div class="members_details_right_text">
                                <p><?php echo $r['s_name'] ?> is an verified agent with Plans property dealers you can buy
                                and sell with them and you can also conatct with them for any query regarding our agent or
                                any misbehaving and fraud or scam you can report this agent with us.</p>
                            </div>
                           

                            <?php 
                            
}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Members Details End-->






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
                                     
                                       $sql_get1 = "select * from s_add where s_add.ag_id = '$id '";
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
                                                    <a href="del_add.php?id=<?php echo $row1['a_id'] ?>&aid=<?php echo $row1['ag_id'] ?>" class="sale_btn"> Delete</a>

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
                                    <img class="img1" src="./pictures/no-property.png" alt="">    
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
include('Layout/footer.php');
?>