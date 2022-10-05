
<?php include 'Layout/navbar.php';
include 'dbconfig.php';
// session_start();
?>

<style>
    body{
    margin-top:20px;
    /* color: #1a202c; */
    text-align: left;
    /* background-color: #e2e8f0;     */
}
.main-body {
    padding: 15px;
}
.cd1 {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.cd1 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.cb1 {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.cr{
    color: #4c7ce3;
    /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
    font-family:Georgia, 'Times New Roman', Times, serif;
}
.add_img{
        height: 305px;
        width: 252px;
    }
  .tab1{
    font-size: 20px;
    font-family:'Times New Roman', Times, serif;
  }
.txt1{
  font-family: 'Times New Roman', Times, serif;
  font-size: 15px;
}
  
</style>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <?php 
          $ag = $_REQUEST['id'];
          $sql_q = "SELECT * FROM `firm_regist`inner join s_regist on agent_id = s_regist.s_id and agent_id = '$ag'";
          $res = mysqli_query($con,$sql_q);
          $r = mysqli_fetch_assoc($res);
          $agent_id = $r['agent_id'];

          // $sql_2 = "SELECT * from s_regist where s_id = '$agent_id'";
          // $res2 = mysqli_query($con,$sql_2);
          // $row = mysqli_fetch_assoc($res2)

          ?>
          <div class="row">
                <div class="col-sm-8">
                    <br>
                    <br>
                    <h2><center><b class="cr"><?php echo $r['fi_name'] ?></b></center></h2>
                    <br>
                    
                    <div class="card cd1 mb-3">
                        <div class="card-body cb1">
                            <h2 class="cr text-info">About:</h2>
                            <p><?php echo $r['f_desc'] ?></p>
                        </div>

                    </div>

                    <div class="card cd1 mb-3">
                        <div class="card-body cb1">
                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="500" data-speed="500"><?php echo no_of_rows_bytable('s_add','where ag_id = '.$r['agent_id']) ?></h6>
                                        <p class="m-0px font-w-600 txt1">Listed Properties</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="150" data-speed="150"><?php echo no_of_rows_bytable('s_follow','where from_follow = '.$r['agent_id']) ?></h6>
                                        <p class="m-0px font-w-600 txt1">Followers</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="850" data-speed="850"><?php echo no_of_rows_bytable('s_follow','where to_follow = '.$r['agent_id']) ?></h6>
                                        <p class="m-0px font-w-600 txt1">Following</p>
                                    </div>
                                </div>
                              
                            </div>
                    

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="card cd1">
                        <div class="card-body cb1">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo $r['fi_logo'] ?>" alt="Admin" class="rounded-circle" width="150" height="150px">
                            <div class="mt-3">
                            <h4 class="text-primary"><?php echo $r['fi_name'] ?></h4>
                            <p class="text-success mb-1"> <b>Verified Real State Agency</b></p>
                            <p class="text-muted font-size-sm"><?php echo $r['fi_address'] ?></p>
                            <button class="btn btn-primary">Follow</button>
                            
                            <a href="mailto:<?php echo $r['fi_email'] ?>"><button class="btn btn-outline-primary">Email Us!</button></a>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                
            </div>


        
            
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card cd1">
                <div class="card-body cb1">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $r['s_pic']  ?>" alt="Admin" class="rounded-circle" width="150" height="150px">
                    <div class="mt-3">
                      <h4 class="text-info"><?php echo $r['s_name'] ?></h4>
                      <p class="text-secondary mb-1"><i class="text-success fa fa-check"> </i> Verified Property Agent</p>
                      <p class="text-muted font-size-sm"></p>
                      <button class="btn1 btn btn-outline-primary">Chat Now!</button>
                      
                      <a  class="btn green-btn btn-success btn_w" href="https://api.whatsapp.com/send?phone=<?php 
                        if(substr($rm['s_num'],0,1)=="0")
                        {
                            echo "92".substr($rm['s_num'], 1);
                        }
                        else {
                            echo "92".$rm['s_num']; 
                            }  ?>&text=I Would like to inquire about your property" target="_blank"><i class="fab fa-whatsapp"> WhatsApp </i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card cd1 mt-3">

                 <!--  -->
                 
                
              </div>

            </div>


            <div class="col-md-8">
              <div class="card cd1 mb-3">
                <div class="card-body cb1">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Agency Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" value="<?php echo $r['fi_name'] ?>" readonly style="background-color:#fff;" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="<?php echo $r['fi_email']?>" readonly style="background-color:#fff;" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="<?php echo $r['fi_tel'] ?>" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="<?php echo $r['fi_phone'] ?>"" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="<?php echo $r['fi_address'] ?>" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 text-info">Year of EStablishment</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" value="<?php echo $r['fi_year'] ?>" readonly style="background-color:#fff;" class="form-control">

                    </div>
                  </div>
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div> -->
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card cd1 h-100">
                    <div class="card-body cb1">
                    
                    <div class="container">


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                          aria-controls="home" aria-selected="true">Approved Properties</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab"
                          aria-controls="menu1" aria-selected="false">Unpproved Properties</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu2" role="tab"
                          aria-controls="menu2" aria-selected="false">Rejected Properties</a>
                      </li>
                    </ul>

                        <!-- <ul class="nav nav-tabs">
                          <li class="active tab1"><a data-toggle="tab" href="#home">Approved Properties</a></li>
                          <li class="tab1"><a data-toggle="tab" href="#menu1">Unpproved Properties</a></li>
                          <li class="tab1"><a data-toggle="tab" href="#menu2">Rejected Properties</a></li> -->
                          <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
                        <!-- </ul> -->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="width:1050px;">
                              <br>
                              <br>
                          
                                <div class="listings_two_page_content">
                                  <div class="row">
                                    <div class="col-xl-8 col-lg-12">
                                      <div class="listings_two_page_content_inner">

                                      <?php 
                                      $sql_get = "SELECT * from s_add where a_status = 'Approved' and ag_id = '$agent_id'";
                                      $res = $con->query($sql_get);
                                      while ($r = $res->fetch_array()) {
                                        $title = $r['a_title']; 
                                        $price = $r['a_price'];   
                                        $aid = $r['a_id'];  
                                      ?>


                                            <div class="listings_two_page_content_single">
                                              <div class="listings_two_page_main_img">
                                                  <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                                      
                                                      <?php 
                                                      $sql_img = "SELECT * from aimg where ai_id = '$aid'";
                                                      $res1 = $con->query($sql_img);
                                                      while ($im = $res1->fetch_array()) {
                                                      ?>
                                                      <div class="listings_two_page_img">
                                                          <div class="listings_two_page_content_img_box">
                                                          <img src="<?php echo 'images/'.$im['i_pic'] ?>" class="add_img" alt="" >
                                                          </div>
                                                          <div class="listings_two_page_content_icon">
                                                              <i class="fa fa-heart"></i>
                                                          </div>
                                                          <div class="listingstwo_page_content_btn">
                                                      
                                                          <a href="#" class="featured_btn"><?php echo $r['a_type'] ?></a>
                                                              <a href="#" class="sale_btn"><?php echo $r['a_cat'] ?></a>
                                                          </div>
                                                      </div>
                                                      <?php } ?>

                                                  </div>
                                              </div>
                                              <div class="listings_two_page_bottom_content" style="height: 305px;">
                                                  <div class="listings_two_page_bottom_content_top">
                                                      <h4 class="title"><a href="listing-details.html"><?php echo $title ?></a></h4>
                                                      <p><?php echo $r['a_loc'].','.$r['a_city'] ?></p>
                                                      <h3>Rs.<?php echo $price ?><span> Sqft</span></h3>
                                                  </div>
                                                  <div class="listings_two_page_bottom_item">
                                                      <ul class="list-unstyled">
                                                          <li><span class="icon-bed"></span><?php echo $r['a_bad'] ?></li>
                                                          <li><span class="icon-shower"></span><?php echo $r['a_bath'] ?></li>
                                                          <li><span class="icon-square-measument"></span><?php echo $r['a_area'] ?> sqft</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        <?php } ?>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                            
                          </div>
                          <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="profile-tab" style="width:1050px;">
                            <br>
                            <br>
                          <div class="listings_two_page_content">
                                  <div class="row">
                                    <div class="col-xl-8 col-lg-12">
                                      <div class="listings_two_page_content_inner">

                                      <?php 
                                      $sql_get = "SELECT * from s_add where a_status = 'Pending' and ag_id = '$agent_id'";
                                      $res = $con->query($sql_get);
                                      while ($r = $res->fetch_array()) {
                                        $title = $r['a_title']; 
                                        $price = $r['a_price'];   
                                        $aid = $r['a_id'];  
                                      ?>


                                            <div class="listings_two_page_content_single">
                                              <div class="listings_two_page_main_img">
                                                  <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                                      
                                                      <?php 
                                                      $sql_img = "SELECT * from aimg where ai_id = '$aid'";
                                                      $res1 = $con->query($sql_img);
                                                      while ($im = $res1->fetch_array()) {
                                                      ?>
                                                      <div class="listings_two_page_img">
                                                          <div class="listings_two_page_content_img_box">
                                                          <img src="<?php echo 'images/'.$im['i_pic'] ?>" class="add_img" alt="" >
                                                          </div>
                                                          <div class="listings_two_page_content_icon">
                                                              <i class="fa fa-heart"></i>
                                                          </div>
                                                          <div class="listingstwo_page_content_btn">
                                                      
                                                          <a href="#" class="featured_btn"><?php echo $r['a_type'] ?></a>
                                                              <a href="#" class="sale_btn"><?php echo $r['a_cat'] ?></a>
                                                          </div>
                                                      </div>
                                                      <?php } ?>

                                                  </div>
                                              </div>
                                              <div class="listings_two_page_bottom_content" style="height: 305px;">
                                                  <div class="listings_two_page_bottom_content_top">
                                                      <h4 class="title"><a href="listing-details.html"><?php echo $title ?></a></h4>
                                                      <p><?php echo $r['a_loc'].','.$r['a_city'] ?></p>
                                                      <h3>Rs.<?php echo $price ?><span> Sqft</span></h3>
                                                  </div>
                                                  <div class="listings_two_page_bottom_item">
                                                      <ul class="list-unstyled">
                                                          <li><span class="icon-bed"></span><?php echo $r['a_bad'] ?></li>
                                                          <li><span class="icon-shower"></span><?php echo $r['a_bath'] ?></li>
                                                          <li><span class="icon-square-measument"></span><?php echo $r['a_area'] ?> sqft</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        <?php } ?>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>

                          <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="contact-tab" style="width:1050px;">
                            <br>
                            <br>
                            <div class="listings_two_page_content">
                                  <div class="row">
                                    <div class="col-xl-8 col-lg-12">
                                      <div class="listings_two_page_content_inner">

                                      <?php 
                                      $sql_get = "SELECT * from s_add where a_status = 'Rejected' and ag_id = '$agent_id'";
                                      $res = $con->query($sql_get);
                                      while ($r = $res->fetch_array()) {
                                        $title = $r['a_title']; 
                                        $price = $r['a_price'];   
                                        $aid = $r['a_id'];  
                                      ?>


                                            <div class="listings_two_page_content_single">
                                              <div class="listings_two_page_main_img">
                                                  <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                                      
                                                      <?php 
                                                      $sql_img = "SELECT * from aimg where ai_id = '$aid'";
                                                      $res1 = $con->query($sql_img);
                                                      while ($im = $res1->fetch_array()) {
                                                      ?>
                                                      <div class="listings_two_page_img">
                                                          <div class="listings_two_page_content_img_box">
                                                          <img src="<?php echo 'images/'.$im['i_pic'] ?>" class="add_img" alt="" >
                                                          </div>
                                                          <div class="listings_two_page_content_icon">
                                                              <i class="fa fa-heart"></i>
                                                          </div>
                                                          <div class="listingstwo_page_content_btn">
                                                      
                                                          <a href="#" class="featured_btn"><?php echo $r['a_type'] ?></a>
                                                              <a href="#" class="sale_btn"><?php echo $r['a_cat'] ?></a>
                                                          </div>
                                                      </div>
                                                      <?php } ?>

                                                  </div>
                                              </div>
                                              <div class="listings_two_page_bottom_content" style="height: 305px;">
                                                  <div class="listings_two_page_bottom_content_top">
                                                      <h4 class="title"><a href="listing-details.html"><?php echo $title ?></a></h4>
                                                      <p><?php echo $r['a_loc'].','.$r['a_city'] ?></p>
                                                      <h3>Rs.<?php echo $price ?><span> Sqft</span></h3>
                                                  </div>
                                                  <div class="listings_two_page_bottom_item">
                                                      <ul class="list-unstyled">
                                                          <li><span class="icon-bed"></span><?php echo $r['a_bad'] ?></li>
                                                          <li><span class="icon-shower"></span><?php echo $r['a_bath'] ?></li>
                                                          <li><span class="icon-square-measument"></span><?php echo $r['a_area'] ?> sqft</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        <?php } ?>

                                      </div>
                                    </div>
                                  </div>
                                </div>


                            </div>


                       
                        </div>
                      </div>
                            

                    </div>
                  </div>
                </div>
                
              </div>



            </div>
           
          </div>

        </div>
    </div>

    <br>
    <?php
    include 'Layout/footer.php';
    ?>