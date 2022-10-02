<?php 

$title="Contact Us";
include 'Layout/navbar.php';
include 'subscribe.php';
?>

        <section class="page-header" style="background-image: url(assets/images/backgrounds/s17.jpg); background-size:cover;">
            <div class="container">
                <div class="page-header-inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Locations Start-->
        <section class="locations">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Austin</h3>
                                <p>22 Texas West Hills</p>
                            </div>
                            <div class="locations_three_contact">
                                <a href="mailto:needhelp@tolins.com" class="mail_box">needhelp@tolins.com</a>
                                <a href="tel:888-999-0000" class="number_box">888 999 0000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Boston</h3>
                                <p>5 Federal Street Boston</p>
                            </div>
                            <div class="locations_three_contact">
                                <a href="mailto:needhelp@tolins.com" class="mail_box">needhelp@tolins.com</a>
                                <a href="tel:888-999-0000" class="number_box">888 999 0000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>New York</h3>
                                <p>8th Broklyn New York</p>
                            </div>
                            <div class="locations_three_contact">
                                <a href="mailto:needhelp@tolins.com" class="mail_box">needhelp@tolins.com</a>
                                <a href="tel:888-999-0000" class="number_box">888 999 0000</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Locations Single-->
                        <div class="locations_three_single">
                            <div class="locations_three_title">
                                <h3>Baltimore</h3>
                                <p>3 Lombabr 50 baltimore</p>
                            </div>
                            <div class="locations_three_contact">
                                <a href="mailto:needhelp@tolins.com" class="mail_box">needhelp@tolins.com</a>
                                <a href="tel:888-999-0000" class="number_box">888 999 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Locations End-->

        <!--Contact Start-->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="block-title text-left">
                            <h4>Contact Us</h4>
                            <h2>Love to Hear From You</h2>
                        </div>
                        <div class="contact_text">
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit sed do eiusm od tempor ut
                                labore. sit amet scelerisque. Phasellus hendrerit neque a augue.</p>
                        </div>
                        <div class="contact__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 " >
                        <form action="mail.php" class="contact__form" method="POST" id="contact-form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment_input_box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment_input_box">
                                    <input name="email" type="email" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment_input_box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment_input_box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment_input_box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button Type="submit" name="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact End-->

        <!--Google Map-->
        <!-- <section class="google_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__contact" allowfullscreen></iframe>

        </section> -->

        <!--Site Footer One Start-->
        <footer class="site_footer" style="background-image: url(assets/images/resources/site_footer_top_bg.jpg)">
            <div class="container">
                <div class="site_footer_one_top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="footer-widget__column footer_widget__about">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="assets/images/resources/footer_logo.png" alt=""></a>
                                </div>
                                <div class="footer_widget_about_text">
                                    <p>Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                </div>
                                <div class="footer_call_agent_box">
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Agent</p>
                                        <a href="tel:92-888-000-2222">92 888 000 2222</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer_widget__explore clearfix">
                                <div class="footer-widget__title">
                                    <h3>Explore</h3>
                                </div>
                                <ul class="footer_widget__explore_list list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Add Properties</a></li>
                                    <li><a href="#">Pricing Packages</a></li>
                                    <li><a href="#">Bookmarks</a></li>
                                </ul>
                                <ul class="footer_widget__explore_list two list-unstyled">
                                    <li><a href="#">Our Agents</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-8 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer_widget__newsletter">
                                <div class="footer-widget__title">
                                    <h3>Newsletter</h3>
                                </div>
                                <form action="email.php" class="footer_form" method="POST">
                                <?php if (isset($_GET['subscribe'])) { 
                                     echo `<script type="text/javascript">

                                     $(document).ready(function(){
                                      $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
                                       $.ajax({
                                          url:'contact.php', //===PHP file name====
                                           data:$(this).serialize(),
                                           type:'POST',
                                          success:function(data){
                                            console.log(data);
                                             Success Message == 'Title', 'Message body', Last one leave as it is
                                             swal("¡Success!", "Your Comment has been submited", "success");
                                          },
                                          error:function(data){
                                            Error Message == 'Title', 'Message body', Last one leave as it is
                                             swal("Oops...", "Something went wrong :(", "error");
                                            }
                                         });
                                         e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
                                       });
                                      });
                                     </script>`;
                                      } ?>
                                    <div class="footer_input_box">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                        <button type="submit" class="button" name="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="footer_widget__newsletter_bottom">
                                    <p>88 Broklyn Golden Street, New York. USA</p>
                                    <a href="mailto:needhelp@tolins.com">needhelp@tolins.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->

        <!--Site Footer Bottom Start-->
        <div class="site_footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site_footer_inner">
                            <div class="site_footer_left">
                                <p>© Copyright 2020 by <a href="#">Layerdrops.com</a></p>
                            </div>
                            <div class="site_footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Site Footer Bottom End-->




    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/resources/logo-2.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-message"></i>
                    <a href="mailto:needhelp@polimark.com">needhelp@tolins.com</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
    </div>



    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script> -->


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>


</body>

</html>