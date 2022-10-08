<?php
include('encode.php');
if(empty($_REQUEST['id'])){
  $title ="Property Not Available";
  include('layout/navbar.php');
  echo "<img src='assets/images/404.svg' style='width:100%;margin-top:-200px;' >";
  }
    
  else
{
$encid=$_REQUEST['id'];
$id = dect($encid);
include 'dbconfig.php';
$sql_get = "SELECT *,CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title  from s_add where a_id = '$id'";

$res = $con->query($sql_get);

if(mysqli_num_rows($res)==0){
  $title ="Property Not Available";
  include('layout/navbar.php');
  echo "<img src='assets/images/404.svg' style='width:100%;margin-top:-200px;' >";
  }
else
{
  while ($r = $res->fetch_array()) {


    $title =$r['a_title'];
include('layout/navbar.php');
ob_start();
?>

    <style>

.icon-checked:before {
  content: "\e914";
}





 .green-btn{
  background-color: #62cec5;
  color: #ffff;
  border-radius: var(--border-radius);
  transition: all 500ms ease;
   }
   .blue-btn{
    background-color:   var(--thm-base);
    color: #ffff;
    border-radius: var(--border-radius);
    transition: all 500ms ease;

  
   }


 .btn-normal:hover{
  background: #3f4251;
    color: #ffff;
 }
 .listing_details_top_product_list_box:before {
        width: 0px;
      }
      .listing_details_top_product_list_box {
        margin-left: 0px;
      }
      .listing_details_top_title span {
    font-size: 24px;
    color: var(--thm-base);
    font-weight: 700;
    line-height: 34px;
}
.listing_details_top {
    padding: 51px 0 28px;
}
.listing_details {
  padding: 0px; 
}
.carousel-property{
      margin-top:100px;
      margin-bottom:100px;
  }
  .carousel-item{
    height:500px ;
  }

  .carousel-inner img {
      width: 100%;
      height: 100%;
      /* background-color: black; */
      object-fit: contain;
  }
  .img-fluid{
    width: 75px;
    height: 75px;
    object-fit: contain;
    /* background-color: black; */
  }

#custCarousel .carousel-indicators {
    position: static;
    margin-top:20px;
}

#custCarousel .carousel-indicators > li {
  width:100px;
}

 #custCarousel .carousel-indicators li img {
    display: block;
    opacity: 0.5;
 }

  #custCarousel .carousel-indicators li.active img {
    opacity: 1;
  }

  #custCarousel .carousel-indicators li:hover img {
    opacity: 0.75;
  }
.btn_w{
  width: 80%;
  
}
.cr{
  color: #4c7ce3;
  font-family: 'Times New Roman', Times, serif;
}
.f1{
        color: #4c7ce3;
        font-size:large;
        
    }
    .ed_btn{
    width: 100%;
  }
    
      </style>

      <!--Listing Details Top Start-->
      <section class="listing_details_top">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="listing_details_top_left">
                <div class="listing_details_top_title">
                  <h3><?php echo $r['a_title']; ?></h3>
                  <p><?php echo $r['a_loc'].' , '.$r['a_city'].'.'; ?></p>
                  <span>Rs.<?php echo $r['a_price']; ?></span>
                  <ul class="post_rating_and_view_list list-unstyled float-right">
                    <li><i class="far fa-clock"></i>Posted On <?php 
                    $date= date_create($r['a_date']);
                    $current= new DateTime(); 
                    $diff= $current->diff($date);
                    printf('%d days, %d hours Ago', $diff->d, $diff->h); ?></li>
                </ul></div>
                
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--Listing Details Top End-->
      <!--Listing Details Start-->
        <div class="container">
          <div class="row">
            
            <div class="col-xl-8 col-lg-7">
              <div class="listing_details_left">
<div class="carousel-property">
<?php
      $sql_img = "select * from aimg where ai_id = '$id'";
      $resum = $con->query($sql_img);
      $images;
      $i=0;
      while ($rmg = $resum->fetch_array()) {
      $images[$i]=$rmg['i_pic'];
      $i++;
      }
      ?>
<div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
        <!-- slides -->
        <div class="carousel-inner">
        
<?php
for($i=0;$i<count($images);$i++){
?>
    <div class="carousel-item <?php if($i==0){echo"active";}?>">
            <img src="images/<?php echo $images[$i];?>" alt="Hills">
          </div>
<?php
  
}
?>
          </div>

        <!-- Left right -->
        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

        <!-- Thumbnails -->
        <ol class="carousel-indicators list-inline">
          <?php
          for($i=0;$i<count($images);$i++){
          ?>
                  <li class="list-inline-item <?php if($i==0){echo"active";}?>">
            <a id="carousel-selector-<?php echo $i;?>" <?php if($i==0){echo"class='selected'";}?> data-slide-to="<?php echo $i;?>" data-target="#custCarousel">
              <img src="images/<?php echo $images[$i];?>" class="img-fluid">
            </a>
          </li>

  <?php }?>
           </ol>
      </div>
</div>
              <div class="listing_details_top_right clearfix">
                  <div class="listing_details_top_product_list_box">
                    <ul class="listing_details_top_product_list list-unstyled">
                      <li>
                        <div class="icon_box">
                          <span class="icon-bed"></span>
                        </div>
                        <div class="text_box">
                          <h5><?php echo $r['a_bad']; ?></h5>
                          <p>Bedrooms</p>
                        </div>
                      </li>
                      <li>
                        <div class="icon_box">
                          <span class="icon-shower"></span>
                        </div>
                        <div class="text_box">
                          <h5><?php echo $r['a_bath']; ?></h5>
                          <p>Bathrooms</p>
                        </div>
                      </li>
                      <li>
                        <div class="icon_box">
                          <span class="icon-square-measument"></span>
                        </div>
                        <div class="text_box">
                          <h5><?php echo $r['a_area']; ?></h5>
                          <p>Sqft Size</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="listing_details_top_right_btn_box">
                    <?php if($r['a_cat']=="Rent"){?>
                    <a href="#" class="featured_btn btn-block text-center">For Rent</a>
                    <?php }if($r['a_cat']=="Sale"){?>
                    <a href="#" class="sale_btn btn-block text-center">For Sale</a>
                    <?php }?>
  <p>Property ID: <span><?php echo urlencode($_REQUEST['id']); ?></span></p>
                  </div>
                </div>
                <div class="listing_details_text">
                  <br>

                  <h1 class="cr"><b>About Property:</b></h1>
                  <p class="text_1">
                  <?php echo $r['a_desc']; ?></p>
                </div>
<!--  -->

                              <div class="listings_details_features">
                                <div class="listings_details_features_title">
                                    <h3>Features List</h3>
                                </div>
                                <?php 
                                if($r['hot_water'] == '1' or $r['electric'] == '1' or $r['cable'] == '1' or $r['water'] == '1' or $r['kitchen'] == '1' or $r['balcony'] == '1' or $r['gas'] == '1' or $r['tv_lounge'] == '1' or $r['draw_room'] == '1' or $r['dining'] == '1'){
                                
                                ?>
                                <h4 class="f1"><b> Home Features</b></h4>
                                <br><br>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                    <ul class="listings_details_features_list list-unstyled">

                                            <?php
                                              if($r['water'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Water</p>
                                                </div>
                                            </li>
                                            <?php } ?>


                                            <?php 
                                            if($r['cable'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Cable</p>
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <?php 
                                            if($r['electric'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Electricity</p>
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <?php 
                                            if($r['hot_water'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Hot Water</p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="listings_details_features_list list-unstyled">

                                            <?php 
                                            if($r['gas'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Gas</p>
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <?php 
                                            if($r['balcony'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Balacony</p>
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <?php 
                                            if($r['kitchen'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Kitchen</p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                    <ul class="listings_details_features_list list-unstyled">

                                            <?php 
                                            if($r['dining'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Dining</p>
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <?php 
                                            if($r['draw_room'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Drawing Room</p>
                                                </div>
                                            </li>
                                              <?php } ?>

                                            <?php 
                                            if($r['tv_lounge'] == '1'){
                                            ?>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-checked"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Tv lounge</p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                          

                            <!-- Area Feature -->
                            <?php 
                            if($r['mosque'] == '1' or $r['park'] == '1' or $r['garage'] == '1' or $r['nera_commercail'] == '1' or $r['secutity_guard'] == '1')
                            {
                            ?>
                            <div class="listings_details_features">
                                <div class="listings_details_features_title">
                                <h4 class="f1"><b> Area Features</b></h4>
                                <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                    <ul class="listings_details_features_list list-unstyled">

                                            <?php 
                                            if($r['mosque'] == '1'){
                                            ?>
                                             <li>
                                                 <div class="listings_details_icon">
                                                     <span class="icon-checked"></span>
                                                 </div>
                                                 <div class="listings_details_content">
                                                     <p>Mosque</p>
                                                 </div>
                                             </li>
                                             <?php  } ?>

                                             <?php 
                                            if($r['park'] == '1'){
                                            ?>
                                             <li>
                                                 <div class="listings_details_icon">
                                                     <span class="icon-checked"></span>
                                                 </div>
                                                 <div class="listings_details_content">
                                                     <p>Park</p>
                                                 </div>
                                             </li>
                                             <?php }?>
                                         
                                         </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                    <ul class="listings_details_features_list list-unstyled">

                                            <?php 
                                            if($r['garage'] == '1'){
                                            ?>
                                             <li>
                                                 <div class="listings_details_icon">
                                                     <span class="icon-checked"></span>
                                                 </div>
                                                 <div class="listings_details_content">
                                                     <p>Garage</p>
                                                 </div>
                                             </li>
                                             <?php } ?>

                                             <?php 
                                            if($r['nera_commercail'] == '1'){
                                            ?>
                                             <li>
                                                 <div class="listings_details_icon">
                                                     <span class="icon-checked"></span>
                                                 </div>
                                                 <div class="listings_details_content">
                                                     <p>Near Commercial</p>
                                                 </div>
                                             </li>
                                             <?php  } ?>
                                            
                                             
                                         </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                      <ul class="listings_details_features_list list-unstyled">
                                          <?php 
                                            if($r['secutity_guard'] == '1'){
                                            ?>
                                          <li>
                                                 <div class="listings_details_icon">
                                                     <span class="icon-checked"></span>
                                                 </div>
                                                 <div class="listings_details_content">
                                                     <p> Security Guard</p>
                                                 </div>
                                             </li>
                                             <?php } ?>
                                   
                                      </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                               


<!--  -->
                <div class="row">
                  <div class="col-xl-12">
                    <div class="listing_details_location">
                      <div class="listing_details_location_title">
                        <div class="left">
                          <h3>Property Location</h3>
                        </div>
                        <div class="right">
                          <p><?php echo $r['a_loc'].", ".$r['a_city']; ?></p>
                        </div>
                      </div>
                      <div class="listing_details_location_map">
                        <iframe
                          src="https://www.google.com/maps?q=<?php  $ag = $r['ag_id'];echo $r['a_city']; ?>&output=embed"
                          class="google-map__contact"
                          allowfullscreen
                        ></iframe>
                      </div>
                    </div>
                  </div>
                </div>              
              </div>
            </div>
            
            <div class="col-xl-4 col-lg-5">
            <?php
              $sql_agnt = "SELECT * ,CONCAT(UCASE(LEFT(s_name, 1)),LCASE(SUBSTRING(s_name, 2))) as s_name from s_regist where s_id = '$ag'";
              $reg = $con->query($sql_agnt);
              while ($rm = $reg->fetch_array()) {
              ?>
<div class="listing_details_sidebar">
                <div class="listing_details_sidebar_agent ">
                  <div class="listing_details_sidebar_agent_img">
                    <img
                      src="<?php echo $rm['s_pic']; ?>"
                      alt="<?php echo $rm['s_name']; ?>"
                    />
                  </div>
                  <div class="listing_details_sidebar_agent_content">
                    <div class="listing_details_sidebar_agent_title text-center">
                      <h3><?php echo $rm['s_name']; ?></h3>
                      <p>Verified Property Agent</p>
                    </div>
                    <?php if(!empty($_SESSION['id'])){?>
                    <ul
                      class="listing_details_sidebar_agent_contact_info list-unstyled"
                    >
                      <li>
                        <a  class="btn green-btn btn-normal btn_w" href="https://api.whatsapp.com/send?phone=<?php 
                        if(substr($rm['s_num'],0,1)=="0")
                        {
                            echo "92".substr($rm['s_num'], 1);
                        }
                        else {
                            echo "92".$rm['s_num']; 
                            }  ?>&text=I Would like to inquire about your property i.e property id: <?php echo urlencode($_REQUEST['id']) ?>" target="_blank"><i class="fab fa-whatsapp"> ReachOut on WhatsApp </i></a>
                      </li>
                      <li>
                        <a  class="btn blue-btn btn-normal btn_w" href="mailto:<?php echo $rm['s_email'] ?>?Subject=Want Details About Your Property&body=I Would like to inquire about your property i.e property id: <?php echo urlencode($_REQUEST['id']) ?>" ><i class="fas fa-envelope"> Connect with E-mail </i></a>
                      </li>
                    </ul>
                    <div class="text-center">
              <p>For more From Agent <a  href="agent.php?uid=<?php echo enc($rm['s_id']) ;?>">Click Here!</a></p>
                  </div>
                  
                  <?php } else{?>
                    <div class="text-center">
              <p>For more From Agent, Please Sign up </p>
                  </div>
                  
                    <?php }}?>
                  </div>
                </div>
                <br>
                <?php 
                if(isset($_SESSION['id']) == $r['ag_id']){

                    if($_SESSION['id'] == $r['ag_id']){
                      echo '
                      <a href="editproperty.php?id='.enc($r['a_id']).'"><button class="btn btn-outline-primary ed_btn">Edit Property</button></a>
                      ';      
                    }
                
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php 
}}}
include('Layout/footer.php');
?>
