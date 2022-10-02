<?php 
    include 'dbconfig.php';
    include 'encode.php';
    include 'Layout/navbar.php';
    if(empty($_REQUEST['city'])){
        $title ="Agent Not Available";

        echo "<img src='assets/images/404.svg' style='width:100%;margin-top:-200px;' >";
        }else{



$city = $_REQUEST['city'];
// echo $city;
    $rows=6;
if(isset($_GET['count'])){
    $rows=$_GET['count'];
}    


    if(isset($_REQUEST['min'])){
        $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_city = '$city' ORDER BY `s_add`.`a_price` ASC LIMIT $rows";    
    }
    else if(isset($_REQUEST['max'])){
        $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_city = '$city' ORDER BY `s_add`.`a_price` DESC LIMIT $rows";    
    }
    else{
      $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_city = '$city' LIMIT $rows";

    }

$res = $con->query($sql_get);
    ?>
       
   <!-- Css-->
<style>
    .add_img{
        height: 257px;
        width: 252px;
    }
    .img_grid{
        height: 370px;
        width: 282px;
    }
    .title{
        text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    }
    .city_img{
        width: 550px;
        height: 550px;
    }
    .t1{
        font-family: 'Times New Roman', Times, serif;
    
    }
</style>
 




    <!-- <div class="page-wrapper"> -->


            <br>
            <br>
        <!--Listing One Start-->
        <div class="container">
            <h1 class="text-primary t1"><b><?php echo strtoupper($city) ?></b></h1>
            <br>
            <div class="row">
                <div class="col-sm-6">
                <img src="./assets/images/<?php echo $city?>.jpg" alt="" class="city_img">
                </div>
                <div class="col-sm-6">
                         <iframe
                          src="https://www.google.com/maps?q=<?php echo $city ?>&output=embed"
                          class="google-map__contact"
                          allowfullscreen
                        ></iframe>
                </div>
            </div>
        </div>
        <?php 
        if(mysqli_num_rows($res)>0){
        ?>
            
        <section class="listing_one_wrap two">
            <div class="container clearfix">
         
                <div class="pb-2">
                <br>
                <br> 
                   
            <h2 class="text-primary t1"><b>PROPERTIES IN <?php echo strtoupper($city) ?></b></h2>
                    
                    
                    <br>
                    <br>
         
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="filter">
                                <div class="filter_inner_content">
                                    
                                    <div class="left">
                                        <div class="left_icon">
                                            <?php 
                                            if(!isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="location-property.php?count=<?php echo $rows ?>&city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>&grid" class="icon-grid"></a>
                                            <a href="location-property.php?count=<?php echo $rows ?>&city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>" class="list-icon active icon-list"></a>
                                            <?php }?>
                                            <?php 
                                            if(isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="location-property.php?count=<?php echo $rows ?>&city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>&grid" class="icon-grid active"></a>
                                            <a href="location-property.php?count=<?php echo $rows ?>&city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>" class="list-icon  icon-list"></a>
                                            <?php }?>
                                            
                                        </div>
                                        <div class="left_text">
                                            <h4>Over <?php 
                                            if(
                                                mysqli_num_rows($res)<$rows)
                                                {
                                                    echo "All";
                                                }
                                            else{
                                                echo $rows;
                                                }?> Results Found</h4>


                                        </div>
                                        
                                    </div>

                                            <?php 
                                            if(!isset($_REQUEST['grid'])){
                                            ?>
                                            <div class="dropdown show">
                                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort Property
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="location-property.php?city=<?php echo $city ?>&min">Sort By Minimum Price</a>
                                                <a class="dropdown-item" href="location-property.php?city=<?php echo $city ?>&max">Sort By Maximum Price</a>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <!-- For Grid -->
                                            <?php 
                                            if(isset($_REQUEST['grid'])){
                                            ?>
                                            <div class="dropdown show">
                                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort Property
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="location-property.php?grid&city=<?php echo $city ?>&min">Sort By Minimum Price</a>
                                                <a class="dropdown-item" href="location-property.php?grid&city=<?php echo $city ?>&max">Sort By Maximum Price</a>
                                   
                                                </div>
                                            </div>
                                            <?php }?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listings_two_page_content">
                        <?php 
                        if(!isset($_REQUEST['grid'])){
                        ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="listings_two_page_content_inner">
                                    <!--Listings Two Page Content Single-->

                                    <?php 
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
                                        <div class="listings_two_page_bottom_content">
                                            <div class="listings_two_page_bottom_content_top">
                                                <h4><a href="property.php?id=<?php echo enc($r['a_id']) ?>"><?php echo $title ?></a></h4>
                                                <p><?php echo $r['a_loc'].','.$r['a_city'] ?></p>
                                                <h3>Rs.<?php echo $price ?> <span></span></h3>
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
                        <?php } ?>


                        <!-- GRID VIEW -->
                                
                            <?php 
                            if(isset($_REQUEST['grid'])){
                            ?>
                           
                            <div class="row">
                            <?php 
                                while ($r = $res->fetch_array()) {   
                                $title = $r['a_title']; 
                                $price = $r['a_price'];       
                                $aid = $r['a_id'];   
                            ?>
                            <div class="col-sm-4">
                                <!--Listings Page Content Single-->
                                <div class="listings_page_content_single">
                                    <div class="listings_page_content_carousel owl-theme owl-carousel">
                                                <?php 
                                                $sql_img = "SELECT * from aimg where ai_id = '$aid'";
                                                $res1 = $con->query($sql_img);
                                                while ($im = $res1->fetch_array()) {
                                                ?>
                                       
                                        <div class="listings_page_content_img_box">
                                                
                                            <div class="listings_page_content_img">
                                                <img src="<?php echo 'images/'.$im['i_pic'] ?>" class="img_grid" alt="">
                                            </div>
                                            <div class="listings_page_content_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="listings_page_content_btn">
                                                <a href="#" class="featured_btn"><?php echo $r['a_type'] ?></a>
                                                <a href="#" class="sale_btn"><?php echo $r['a_cat'] ?></a>
                                            </div>
                                  
                                        </div>
                                        <?php } ?>
                                       
                                      
                                    </div>
                                    <div class="listings_page_bottom_content">
                                        <div class="listings_page_bottom_content_top">
                                        <h4 class="title"><a href="property.php?id=<?php echo enc($r['a_id']) ?>"><?php echo $title ?></a></h4>
                                            <p class="title"><?php echo $r['a_loc'] ?></p>
                                            <h3>Rs.<?php echo $r['a_price'] ?> <span></span></h3>
                                        </div>
                                        <div class="listings_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span><?php echo $r['a_bad'] ?></li>
                                                <li><span class="icon-shower"></span><?php echo $r['a_bath'] ?></li>
                                                <li><span class="icon-square-measument"></span><?php echo $r['a_area'] ?> sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                       
                            <?php } ?>
                                                    

                        <!-- Load Button  -->
                        <?php 
                        if(isset($_REQUEST['grid'])){
                        if(mysqli_num_rows($res)>=$rows){?>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="listings_page_content_load_more_btn">
                                    <a href="location-property.php?city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>&grid" class="thm-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                        <?php }
                     }?>

                      <?php 
                        if(!isset($_REQUEST['grid'])){
                        if(mysqli_num_rows($res)>=$rows){?>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="listings_page_content_load_more_btn">
                                    <a href="location-property.php?city=<?php echo $city ?>&count=<?php $count=$rows+6; echo $count;?>" class="thm-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                        <?php }
                     }?>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </section>
        <?php }else{
            echo '
            <br><br>
           <center><h3> no found <h3></center>
           <br><br>
           ';
        } 
        ?>
    

    <!-- </div> -->
    <!-- /.page-wrapper -->




    <?php }
    include 'Layout/footer.php';
    ?>
       




   

