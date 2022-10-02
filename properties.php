<?php 
    include 'dbconfig.php';
    include 'encode.php';
    include 'Layout/navbar.php';

    $rows=6;
if(isset($_GET['count'])){
    $rows=$_GET['count'];
}    



    if(isset($_REQUEST['sellsearch'])){

        // Query With Search Keyword And Type Sell


        $sell = $_REQUEST['sellsearch'];

        if(isset($_REQUEST['type'])){
            $cat = $_REQUEST['cat'];
            $type = $_REQUEST['type'];
            // $min = $_REQUEST['min'];
            if($cat == ''){
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' and a_title like '%$sell%' and a_cat = 'Sell'  LIMIT $rows";    
            }
            else if($type == ''){
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and  a_cat = '$cat' and a_title like '%$sell%'  LIMIT $rows";
            }else{
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' and a_cat = '$cat' and a_title like '%$sell%'  LIMIT $rows";
        
            }
           
            
        }else{
            $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_cat = 'Sell' and a_title like '%$sell%' LIMIT $rows";
        
        }

    }

    else if(isset($_REQUEST['rentsearch'])){
        
        // Query With Search Keyword And Type Rent

        $rent = $_REQUEST['rentsearch'];

        if(isset($_REQUEST['type'])){
            $cat = $_REQUEST['cat'];
            $type = $_REQUEST['type'];
            // $min = $_REQUEST['min'];
            if($cat == ''){
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' and a_title like '%$rent%' and a_cat = 'Rent' LIMIT $rows";    
            }
            else if($type == ''){
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and  a_cat = '$cat' and a_title like '%$rent%' LIMIT $rows";
            }else{
                $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' and a_cat = '$cat' and a_title like '%$rent%' LIMIT $rows";
        
            }
           
            
        }else{
            $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_cat = 'Rent' and a_title like '%$rent%' LIMIT $rows";
        
        }


    }
    else{

    
    // Simple Query With Out Search Keyword

    if(isset($_REQUEST['type'])){
        $cat = $_REQUEST['cat'];
        $type = $_REQUEST['type'];
        // $min = $_REQUEST['min'];
        if($cat == ''){
            $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' LIMIT $rows";    
        }
        else if($type == ''){
            $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and  a_cat = '$cat' LIMIT $rows";
        }else{
            $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' and a_type = '$type' and a_cat = '$cat' LIMIT $rows";
    
        }
       
        
    }else{
        $sql_get = "SELECT * , CONCAT(UCASE(LEFT(a_title, 1)),LCASE(SUBSTRING(a_title, 2))) as a_title from s_add where a_status = 'Approved' LIMIT $rows";
    
    }


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
    .t1{
        font-family: 'Times New Roman', Times, serif;
    
    }
</style>
 




    <!-- <div class="page-wrapper"> -->


        
        <!--Listing One Start-->
            
        <section class="listing_one_wrap two">
            <div class="container clearfix">
              
                <div class="pb-2">
                <br>
                <br> 
                    <?php
                    //  if(!isset($_REQUEST['grid'])){ 
                    ?>           
                    <form class="listing_one_content_right_form" action="" method="GET">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="listing_one_content_right_input_box">
                                    <h4 class="title">Choose Type</h4>
                                    <select class="selectpicker" name="type" data-width="100%">
                                         <option value="">Select</option>

                                            <option value="Home">Home</option>
                                            <option value="Plot">Plot</option>
                                            <option value="Commercial">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="listing_one_content_right_input_box">
                                    <h4 class="title">Choose Category</h4>
                                    <select class="selectpicker" name="cat" data-width="100%">
                                            <option value="">Select</option>

                                            <option value="Rent">Rent</option>
                                            <option value="Sell">Sell</option>
                                    </select>
                                </div>
                                <?php 
                                   
                                    if(isset($_REQUEST['grid'])){
                                        echo '<input type="hidden" name="grid">';
                                    }
                                    if(isset($_REQUEST['sellsearch'])){
                                        echo '<input type="hidden" name="sellsearch" value="'.$_REQUEST['sellsearch'].'">';
                                    }
                                ?>
                            </div>
                             
                            <div class="col-xl-2">
                                <br>
                                <br>
                            <button class="btn btn-outline-primary" type="submit">Filter Property</button>

                            </div>
                            
                        </div>
                        <br>
                    </form>
                    <?php
                //  }?>
                    <!--  -->
                    
                    
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-xl-12">
                            <?php 
                            if(isset($_REQUEST['sellsearch'])){
                                echo '
                            <h3 class="text-info"><b class="text-primary t1">SEARCH IN : </b>'.$_REQUEST['sellsearch'].'</h3><br>
                                
                                ';
                            }
                            if(isset($_REQUEST['rentsearch'])){
                                echo '
                            <h3 class="text-info"><b class="text-primary t1">SEARCH IN : </b>'.$_REQUEST['rentsearch'].'</h3><br>
                                
                                ';
                            }
                            ?>
                            <div class="filter">
                                <div class="filter_inner_content">
                                    
                                    <div class="left">
                                        <div class="left_icon">

                                            <?php 
                                            if(isset($_REQUEST['sellsearch'])){
                                                // With Sell Search In This Condition 
                                            ?>
                                             <?php 
                                            if(!isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid&sellsearch=<?php echo $_REQUEST['sellsearch'] ?>" class="icon-grid"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>&sellsearch=<?php echo $_REQUEST['sellsearch'] ?>" class="list-icon active icon-list"></a>
                                            <?php }?>
                                            <?php 
                                            if(isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid&sellsearch=<?php echo $_REQUEST['sellsearch'] ?>" class="icon-grid active"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>&sellsearch=<?php echo $_REQUEST['sellsearch'] ?>" class="list-icon  icon-list"></a>
                                            <?php }?>
                                         
                                            

                                            <?php
                                            }
                                            else if(isset($_REQUEST['rentsearch'])){
                                                // With Rent Search In This Condition 

                                            ?>


                                            <?php 
                                            if(!isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid&rentsearch=<?php echo $_REQUEST['rentsearch'] ?>" class="icon-grid"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>&rentsearch=<?php echo $_REQUEST['rentsearch'] ?>" class="list-icon active icon-list"></a>
                                            <?php }?>
                                            <?php 
                                            if(isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid&rentsearch=<?php echo $_REQUEST['rentsearch'] ?>" class="icon-grid active"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>&rentsearch=<?php echo $_REQUEST['rentsearch'] ?>" class="list-icon  icon-list"></a>
                                            <?php }?>


                                            
                                            <?php }
                                            
                                            else{
                                                // without Search on Else
                                            ?>
                                               <?php 
                                            if(!isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid" class="icon-grid"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>" class="list-icon active icon-list"></a>
                                            <?php }?>
                                            <?php 
                                            if(isset($_REQUEST['grid'])){
                                            ?>
                                            <a href="properties.php?count=<?php echo $rows ?>&grid" class="icon-grid active"></a>
                                            <a href="properties.php?count=<?php echo $rows ?>" class="list-icon  icon-list"></a>
                                            <?php }?>

                                            <?php } ?>


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
                                    <a href="properties.php?count=<?php $count=$rows+6; echo $count;?>&grid" class="thm-btn">Load More</a>
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
                                    <a href="properties.php?count=<?php $count=$rows+6; echo $count;?>" class="thm-btn">Load More</a>
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
 
    

    <!-- </div> -->
    <!-- /.page-wrapper -->




    <?php 
    include 'Layout/footer.php';
    ?>
       




   

