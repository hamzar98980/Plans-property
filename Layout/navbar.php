<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
    if(isset($title)){
        echo $title ."-The Online Property Buy and Sell";
    }
    else
    {
        echo "Plans Property - The Online Property Buy and Sell";
    } ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vegas.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/tolips.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
       /* .header_top_one_content_box_bottom_contact_info_list li .text a {
        color:#4c7ce3;
       } */
       a.btn.btn-outline-primary:hover{
        color: white;
       }
    </style>

</head>

<body>

 <!-- <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div> -->
    <div class="page-wrapper">

        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_one">
                <div class="container">
                    <div class="header_top_one_inner clearfix">
                        <div class="header_top_one_logo_box float-left">
                            <div class="header_top_one_logo">
                                <a href="index.php"><img src="assets/images/resources/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="header_top_one_content_box float-right">
                            <div class="header_top_one_content_box_top clearfix">
                                <div class="header_top_one_content_box_top_left float-left">
                                    <p>Welcome to Plans Property Real Estate</p>
                                </div>
                                <div class="header_top_one_content_box_top_right float-right">
                                    <ul class="list-unstyled header_top_one_content_box_top_right_list">
                                        <li><a href="contact.php">Want Instant Support?</a></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="header_top_one_content_box_bottom">
                                <div class="header_top_one_content_box_bottom_inner clearfix">
                                    <div class="header_top_one_content_box_bottom__social_box">
                                        <div class="header_top_one_content_box_bottom__social">
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                                            <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="header_top_one_content_box_bottom_contact_info">
                                        <ul class="header_top_one_content_box_bottom_contact_info_list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                     <?php if(isset($_SESSION['id']))
                                                    {
                                                   echo '<span class="icon-phone-call"></span>';
                                                    }?>

                                                </div>
                                                <div class="text">
                                                   <?php if(!isset($_SESSION['id']))
                                                    {
                                                    ?>
                                                    <a href="register.php" class="btn btn-outline-primary">Register Now </a>&nbsp;&&nbsp;
                                                    <a href="login.php" class="btn btn-outline-primary">Sign in </a>
                                                    <?php } else{?>
                                                    <p>Text Us</p>
                                                    <!-- <a href="#" style="background-color:#4c7ce3;color:white;" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i> Register Now</a> -->
                                                
                                                       <a href="tel:03170802260">0317-0802260</a>

                                                    <?php }?>
                                                </div>
                                                
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                  
                                                </div>
                                                <div class="text">
                                                    <p>Send Email</p>
                                                    <a href="mailto:sampleid.201@gmail.com">property@gmail.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header class="main-nav__header-one">
                <div class="container">
                    <nav class="header-navigation one stricky">
                        <div class="container-box clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left_one float-left">
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="main-nav__main-navigation one clearfix">
                                    <ul class=" main-nav__navigation-box float-left">
                                    <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="properties.php">Property</a>
                                        </li>
                                        <li>
                                            <a href="about.php">About</a>
                                        </li>
                                         
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                            <div class="main-nav__right main-nav__right_one float-right">
                                
                                                    

                            <?php if(isset($_SESSION['id']))
                                {
                                    echo '
                                    <div class="header_btn_1">
                                        <a href="addProperty.php" class="thm-btn">Add New Property</a>
                                    </div>
                                    ';
                                }
                                // else{

                                //     echo '
                                //     <div class="header_btn_1">
                                //     <button class="btn btn-primary" id="toastr-4">Add New Property</button>
                                //     </div>
                                //     ';
                             
                                // }

                            ?>

                                <?php if(isset($_SESSION['id']))
                                {
                                ?>
                                <div class=" icon_cart_box dropdown">
                                         <a href="#" class="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <img class="rounded-circle" style="width:35px;height:35px;" src="<?php echo $_SESSION['pic']?>" alt="">
                                         <!--<span class="fa fa-user-circle"></span>-->
                                        </a>
                                        <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                                            <a class="dropdown-item" href="agency-dashboard.php?id=<?php echo $_SESSION['id'] ?>">Agency Dashboard</a>
                                            <a class="dropdown-item" href="personalinfo.php">Personal Info</a>
                                            <a class="dropdown-item" href="logout.php">Sign Out</a>
                                            </div>
                                        </div>
                                        <?php }
                                        // else{
                                ?>
                                <!-- <div class="header_btn_1 ml-1 ">
                                    Or <a href="login.php" class="thm-btn">Sign In</a>
                                </div>
                                
                                <div class="header_btn_1">
                                <a href="register.php" class="btn p-2 btn-secondary">Register Now</a>
                                </div> -->
                                
                                <?php
                                // }
                                ?>
                                <div class="icon_search_box">
                                    <a href="#" class="main-nav__search search-popup__toggler">
                                        <i class="icon-magnifying-glass"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>

