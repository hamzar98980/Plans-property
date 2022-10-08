<?php 
ob_start();
include('Layout/navbar.php');
include 'dbconfig.php';
include 'encode.php';
?>

<?php 
function totla_loc($val1){
    include 'dbconfig.php';  
    $sql_l = "SELECT * from s_add where a_city = '$val1' and a_status = 'Approved' ";
    $r = $con->query($sql_l);
    $num = mysqli_num_rows($r);
    if($num >0){
        return $num; 
    }else{
        return '0';
    }
}

?>
<style>
    .latest_properties_top_content h4 , .latest_properties_top_content p
{
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
.add_img{
    width: 282px;
    height: 370px;
}
</style>

        <!-- Banner Section One Start -->
        <section class="banner-one">
            <div class="banner-bg-slide"
                data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/s3.jpg" }, { "src": "assets/images/s4.jpg" } ], "transition": "fade", "timer": false, "align": "top", "animation": [ "kenburnsUp", "kenburnsDown", "kenburnsLeft", "kenburnsRight" ] }'>
            </div><!-- /.banner-bg-slide -->
            <div class="container">
                <div class="content-box">
                    <div class="top-title">
                        <h2>Find Your Future <br> Dream Home</h2>
                    </div>


                    <!-- <form action="" method="GET"> -->
                    <div class="product-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                            <li data-tab="#desc" class="tab-btn active-btn"><span>Sell</span></li>
                            <li data-tab="#review" class="tab-btn"><span>Rent</span></li>
                        </ul>
                        <div class="tabs-content">
                            <!-- <div class="tab " id="desc">
                                <form class="banner_one_search_form" action="" method="GET">
                                    <div class="banner_one_search_form_input_box">
                                        <input type="text" name="search" placeholder="Search for city, property, agent and more...">
                                        <button type="submit" name="buysearch" class="thm-btn banner_one_search_btn">Search
                                            Property</button>
                                        <div class="banner_one_search_icon">
                                            <a href="#"><span class="icon-magnifying-glass"></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div> -->

                            <div class="tab active-tab" id="addi__info">
                                <form class="banner_one_search_form" action="properties.php" method="GET">
                                    <div class="banner_one_search_form_input_box">
                                        <input type="text" name="sellsearch" placeholder="Search for city, property, agent and more...">
                                        <button type="submit" name="buysearch" class="thm-btn banner_one_search_btn">Search
                                            Property</button>
                                        <div class="banner_one_search_icon">
                                            <a href="#"><span class="icon-magnifying-glass"></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab" id="review">
                                <form class="banner_one_search_form" action="properties.php" method="GET">
                                    <div class="banner_one_search_form_input_box">
                                        <input type="text" name="rentsearch" placeholder="Search for city, property, agent and more...">
                                        <button type="submit" name="buysearch" class="thm-btn banner_one_search_btn">Search
                                            Property</button>
                                        <div class="banner_one_search_icon">
                                            <a href="#"><span class="icon-magnifying-glass"></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                    <?php 
                    if(isset($_REQUEST['buysearch'])){
                        $rent = $_REQUEST['rentsearch'];
                        $sell = $_REQUEST['sellsearch'];
                        header("location:properties.php?rent=$rent&sell=$sell");
                    }
                    ?>
                       

                    <div class="banner_one_bottom_icon_text">
                        <div class="banner_one_bottom_icon">
                            <span class="icon-building"></span>
                        </div>
                        <div class="banner_one_bottom_text">
                            <p>Smart Real Estate Services All our the World</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section One End -->

        <!--Explore One Start-->
        <section class="explore_one">
            <div class="container">
                <div class="block-title text-left">
                    <h4>Find Your Properties</h4>
                    <h2>Explore The Popular Cities</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="explore_one_inner_content">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                    "el": "#testimonials-one-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                   "navigation": {
                    "nextEl": ".explore_one_prev",
                    "prevEl": ".explore_one_next",
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
                        "slidesPerView": 1
                    },
                    "991": {
                        "spaceBetween": 20,
                        "slidesPerView": 3
                    },
                    "1289": {
                        "spaceBetween": 30,
                        "slidesPerView": 4
                    },
                    "1440": {
                        "spaceBetween": 30,
                        "slidesPerView": 5
                    }
                }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                                <a href="location-property.php?city=Karachi"><img src="assets/images/Karachi.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Karachi">Karachi / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                    <a href="#"><?php echo totla_loc('Karachi'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Lahore"><img src="assets/images/Lahore.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Lahore">Lahore / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Lahore'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Islamabad"><img src="assets/images/Islamabad.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Islamabad">Islamabad / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Islamabad'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Multan"><img src="assets/images/Multan.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Multan">Multan / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Multan'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Peshawar">  <img src="assets/images/Peshawar.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Peshawar">Peshawar / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Peshawar'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Quetta"><img src="assets/images/Quetta.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Quetta">Quetta / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Quetta'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="explore_one_single">
                                            <div class="explore_one_img">
                                            <a href="location-property.php?city=Faisalabad"> <img src="assets/images/Faisalabad.jpg" style="height:450px ;" alt=""></a>
                                                <div class="explore_one_text">
                                                    <p><a href="location-property.php?city=Faisalabad">Faisalabad  / Pakistan</a></p>
                                                </div>
                                                <div class="explore_one_btn">
                                                <a href="#"><?php echo totla_loc('Faisalabad'); ?> Properties</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                   
                                </div>
                            </div>
                            <div class="explore_one_nav">
                                <div class="explore_one_next"><span class="icon-right-arrow"></span></div>
                                <div class="explore_one_prev"><span class="icon-right-arrow"></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Explore One End-->

        <!--Why Choose One Start-->
        <section class="why_choose_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/s3.jpg)">
            <div class="container">
                <div class="why_choose_one_title">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="why_choose_one_shape_one"
                    style="background-image: url(assets/images/shapes/why_choose_one_shape_1.png)"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp">
                            <div class="why_choose_one_icon">
                                <span class="icon-town"></span>
                            </div>
                            <h3>Find Your <br> Dream Home</h3>
                            <p> Get your Dream House From <br> Plans Property <br> From Verifird Seller.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="100ms">
                            <div class="why_choose_one_icon">
                                <span class="icon-agent"></span>
                            </div>
                            <h3>Experienced <br> Agents</h3>
                            <p>Delas and Chat with <br> Experience and <br> Verified Charges.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="200ms">
                            <div class="why_choose_one_icon">
                                <span class="icon-assets"></span>
                            </div>
                            <h3>Buy or Rent <br> Homes</h3>
                            <p>Buy property on Rent  <br> with best sellers<br> of plans property.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Why Choose One Single-->
                        <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="why_choose_one_icon">
                                <span class="icon-rent"></span>
                            </div>
                            <h3>List Your <br> Own Property</h3>
                            <p>Sell and Rent Your  <br>Own Property on <br>Plans Property</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Latest Properties Start-->
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
                                
                                $sql_get1 = "select * from s_add where a_status = 'Approved' ORDER BY a_id ASC LIMIT 6";
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
        
        <!--Latest Properties End-->

        <!--Providing One Start-->
        <section class="providing_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="providing_one_left">
                            <div class="block-title text-left">
                                <h4>What Are You Looking</h4>
                                <h2>Providing the <br> Best Real Estate Services</h2>
                            </div>
                            <div class="providing_one_btn">
                                <a href="listing-1.html" class="thm-btn">Search Property</a>
                            </div>
                            <div class="providing_one_shaape_one">
                                <img src="assets/images/shapes/providing_one_shape_1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="providing_one_four_boxes clearfix">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="providing_one_four_boxes_iocn">
                                        <span class="icon-home"></span>
                                    </div>
                                    <div class="providing_one_four_boxes_text">
                                        <p>Modern<br>Villas</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="providing_one_four_boxes_iocn">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="providing_one_four_boxes_text">
                                        <p>Furnished<br>Homes</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="providing_one_four_boxes_iocn">
                                        <span class="icon-condominium"></span>
                                    </div>
                                    <div class="providing_one_four_boxes_text">
                                        <p>Sweet<br>Apartment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="providing_one_four_boxes_iocn">
                                        <span class="icon-buildings"></span>
                                    </div>
                                    <div class="providing_one_four_boxes_text">
                                        <p>Commercial<br>Building</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Providing One End-->

        <!--Testimonials One Start-->
        <section class="testimonials_one">
            <div class="container">
                <div class="swiper-container" id="testimonials-one__thumb">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/testimonials/images.jfif" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/testimonials/t1.jfif" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/testimonials/t2.jfif" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-container" id="testimonials-one__carousel">
                    <div class="testimonials_one_carousel_bg"
                        style="background-image: url(assets/images/testimonials/footer.png)"></div>
                    <div class="testimonials_one_quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>There's no Shortage of remarkable ideas
                                What's <br>Missing is the will to execute them.</p>
                            <div class="testimonials-one__meta">
                                <h3>Hamza Rashid / <span>CEO</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>This is due to their excellent service, competitive<br> pricing and customer support.
                                It’s
                                throughly <br> refresing to get such a personal touch.</p>
                            <div class="testimonials-one__meta">
                                <h3>Moshin Khan / <span>CEO</span></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>Our work is to make a new world of property 
                                 <br> With plans property.</p>
                            <div class="testimonials-one__meta">
                                <h3>Taha Rafi / <span>CEO</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials One End-->

        <!--How It Works Start-->
        <!-- <section class="how_it_works">
            <div class="how_it_works_shape_1">
                <img src="assets/images/shapes/how_it_works_shape_1.png" alt="">
            </div>
            <div class="container">
                <div class="block-title text-center">
                    <h4>How It Works</h4>
                    <h2>Follow Easy Steps</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="how_it_works_single list-unstyled">
                            <li>
                                <div class="how_it_works_img">
                                    <img src="assets/images/resources/how_it_works_img_1.png" alt="">
                                    <div class="how_it_works_circle">
                                        <p>01</p>
                                    </div>
                                </div>
                                <div class="how_it_works_content">
                                    <h3>Find Real Estate</h3>
                                    <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                                </div>
                            </li>
                            <li class="item-2">
                                <div class="how_it_works_img">
                                    <img src="assets/images/resources/how_it_works_img_2.png" alt="">
                                    <div class="how_it_works_circle">
                                        <p>02</p>
                                    </div>
                                </div>
                                <div class="how_it_works_content">
                                    <h3>Find Real Estate</h3>
                                    <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                                </div>
                            </li>
                            <li>
                                <div class="how_it_works_img">
                                    <img src="assets/images/resources/how_it_works_img_3.png" alt="">
                                    <div class="how_it_works_circle">
                                        <p>03</p>
                                    </div>
                                </div>
                                <div class="how_it_works_content">
                                    <h3>Take Your Keys</h3>
                                    <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                                </div>
                            </li>
                            <li class="item-4">
                                <div class="how_it_works_img">
                                    <img src="assets/images/resources/how_it_works_img_4.png" alt="">
                                    <div class="how_it_works_circle">
                                        <p>04</p>
                                    </div>
                                </div>
                                <div class="how_it_works_content">
                                    <h3>Live Happily</h3>
                                    <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!--How It Works End-->

        <!--Blog One Start-->
        <!-- <section class="blog_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_left">
                            <div class="block-title text-left">
                                <h4>Our Blog Posts</h4>
                                <h2>Latest News <br>& Articles</h2>
                            </div>
                            <div class="blog_one_text">
                                <p>Lorem ipsum onts persp unde omnis iste natus errluptatem acc usantium demque
                                    laudantium totam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog_one_right">
                            <div class="blog_one_carousel owl-theme owl-carousel"> -->
                                <!--Blog One Single-->
                                <!-- <div class="blog_one_single">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="assets/images/blog/blog_1_img_1.jpg" alt="">
                                        </div>
                                        <div class="blog_one_date_box">
                                            <p>20 Nov, 2020</p>
                                        </div>
                                    </div>
                                    <div class="blog_one_content_box">
                                        <h3><a href="news-details.html">Save Thousands Selling Your Property</a></h3>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!--Blog One Single-->
                                <!-- <div class="blog_one_single">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="assets/images/blog/blog_1_img_2.jpg" alt="">
                                        </div>
                                        <div class="blog_one_date_box">
                                            <p>20 Nov, 2020</p>
                                        </div>
                                    </div>
                                    <div class="blog_one_content_box">
                                        <h3><a href="news-details.html">Leverage agile frame works to a
                                                robust</a></h3>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!--Blog One Single-->
                                <!-- <div class="blog_one_single">
                                    <div class="blog_one_image_box">
                                        <div class="blog_one_img">
                                            <img src="assets/images/blog/blog_1_img_3.jpg" alt="">
                                        </div>
                                        <div class="blog_one_date_box">
                                            <p>20 Nov, 2020</p>
                                        </div>
                                    </div>
                                    <div class="blog_one_content_box">
                                        <h3><a href="news-details.html"> Iterative approaches to corporate
                                                foster</a></h3>
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Blog One End-->

        <!--Brand One Start-->
        
        <!--Brand One End-->
        <?php include('Layout/footer.php')
?>
