        <!--Site Footer One Start-->
        <footer class="site_footer" style="background-image: url(assets/images/resources/site_footer_top_bg.png)">
            <div class="container">
                <div class="site_footer_one_top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="footer-widget__column footer_widget__about">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="assets/images/resources/footer_logo.png" alt=""></a>
                                </div>
                                <div class="footer_widget_about_text">
                                    <p>Plans Property, Offering the highest levels of service to property buyers sellers landlords and tenants.</p>
                                </div>
                                <div class="footer_call_agent_box">
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p>Text Us</p>
                                        <a href="tel:03170802260">0317 0802260</a>
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
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Add Properties</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
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
                                    <a href="mailto:needhelp@PlansProperty.com">needhelp@PlansProperty.com</a>
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
                                <p>© Copyright <?php echo Date("Y")?> by <a href="https://aptech-education.com.pk/">Aptech Learning</a></p>
                            </div>
                            <div class="site_footer__social">
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
                <a href="index.php" aria-label="logo image">
                    <img src="assets/images/resources/logo-2.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-message"></i>
                    <a href="mailto:sampleid.201@gmail.com">needhelp@PlansProperty.com</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:03170802260">0317 0802260</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.twitter.com/" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.pinterest.com/" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://www.instagram.com/" aria-label="instagram"><i class="fab fa-instagram"></i></a>
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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>


</body>

</html>