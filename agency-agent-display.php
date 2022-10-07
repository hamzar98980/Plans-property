
<?php include 'Layout/navbar.php';
include 'dbconfig.php';
include 'encode.php';
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
.cb2{
    height: 400px;
}
.add_img{
    width: 300px;
    height: 300px;
}
.latest_properties_top_content h4 , .latest_properties_top_content p
{
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
  
</style>

<div class="container">
    <div class="main-body">
        <br><br>
          <!-- Breadcrumb -->
          <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="personalinfo.php">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Agency Dashboard</li>
            </ol>
          </nav> -->
          <!-- /Breadcrumb -->

          <?php 
          $ag = $_REQUEST['firm_id'];
          $sql_q = "SELECT * FROM `firm_regist`inner join s_regist on agent_id = s_regist.s_id where fi_id  = '$ag'";
        //   echo $sql_q;
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
                <div class="card-body cb1 cb2">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $r['s_pic']  ?>" alt="Admin" class="rounded-circle" width="150" height="150px">
                    <div class="mt-3">
                      <h4 class="text-info"><?php echo $r['s_name'] ?></h4>
                      <p class="text-secondary mb-1"><i class="text-success fa fa-check"> </i> Verified Property Agent</p>
                      <p class="text-muted font-size-sm"></p>
                      <br>
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

             

          

            </div>
           
          </div>

        </div>


        <div class="row">
                <div class="col-sm-12">
                 

                <section class="latest_properties">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Browse Hot Offers</h4>
                    <h2>Latest Properties</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="thm-swiper__slider swiper-container thm-swiper__slider-pause-hover"
                            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                                "el": "#latest_properties_pagination",
                                "type": "bullets",
                                "clickable": true
                            },
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
                                
                                $sql_get1 = "SELECT * from s_add where ag_id = '$agent_id' and a_status = 'Approved'";
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
                                            <div class="latest_properties_img">
                                                <img src="<?php echo 'images/'.$row['i_pic'] ?>" class="add_img"  alt="">
                                                <div class="latest_properties_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="featured_and_sale_btn">
                                                   
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            
                                        </div>
                                        <div class="latest_properties_content">
                                            
                                            <div class="latest_properties_top_content">
                                             
                                            <h4><a href="property.php?id=<?php echo enc($row1['a_id']) ?>"><?php echo $row1['a_title'] ?></a></h4>
                                                <p><?php echo $row1['a_loc'] ?></p>
                                                <h3>Rs.<?php echo $row1['a_price'] ?><span></span></h3>
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
                                <?php } ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="latest_properties_pagination"></div>
            </div>
        </section>

                </div>
        </div>


    </div>
    

    <br>
    <?php
    include 'Layout/footer.php';
    ?>