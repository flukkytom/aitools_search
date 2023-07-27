<?php include "settings.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <!-- Page Title -->
    <title>AiKloud - Ai Toolz Database - a Blacktech Company</title>
    
    <!--- Font Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Theme Style -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Modernizr js -->
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
    <!--********************************************************-->
    <!--********************* SITE HEADER **********************-->
    <!--********************************************************-->
    <header class="site-header header-style-two">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Navigation
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="site-navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar navbar-expand-lg navigation-area">
                            <div class="mainmenu-area">

                            </div>
                            
                            <div class="site-logo-block">
                                <a class="navbar-brand site-logo" href="index.php">
                                    <img src="assets/images/logo/ai_logo_white.png" alt="logo">
                                    <img src="assets/images/logo/ai_logo.png" alt="logo">
                                </a>  
                            </div><!--~./ site-logo-block ~-->
                            
                            <div class="header-navigation-right">
                                <div class="add-listing-area">
                                    <a class="btn btn-default" href="<?php echo $member_endpoint; ?>" target="_blank">+ add AI Tool</a>
                                </div>
                            </div><!--~./ header-navigation-right ~-->
                        </div><!--~./ navigation-area ~-->
                    </div>
                </div>
            </div>
        </div><!--~./ site-navigation ~-->
        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Mobile Menu
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="mobile-menu">
            <a class="mobile-logo" href="index.php">
                <img src="assets/images/logo/ai_logo_white.png" alt="logo">
            </a>
        </div><!--~~./ end mobile menu ~~-->
    </header>
    <!--~~~ Sticky Header ~~~-->
    <div id="sticky-header"></div><!--~./End site header ~-->
    
    
    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Banner Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="frontpage-banner-section frontpage-banner-style-one bg-overlay-gradient bg-parallax bg-image ptb-100" style="background-image:url('assets/images/bg/aikloud_bg.png')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <div class="frontpage-banner-content text-center text-white">
                            <h1 class="banner-title">Ai Discovery Simplified: <br />empower your ideas with the right tools</h1>
                            <div class="features-cat-area">
                                <div class="features-cat-carousel owl-carousel">
                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-pen"></span>
                                        </div>
                                        <div class="cat-name">
                                            Copywriting
                                        </div>
                                    </a><!--./ cat-item -->

                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-qrcode"></span>
                                        </div>
                                        <div class="cat-name">
                                            Programming
                                        </div>
                                    </a><!--./ cat-item -->

                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-bullhorn"></span>
                                        </div>
                                        <div class="cat-name">
                                            Ads
                                        </div>
                                    </a><!--./ cat-item -->
                                    
                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-audio"></span>
                                        </div>
                                        <div class="cat-name">
                                            Audio to Text
                                        </div>
                                    </a><!--./ cat-item -->

                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-history"></span>
                                        </div>
                                        <div class="cat-name">
                                            Storytelling
                                        </div>
                                    </a><!--./ cat-item -->

                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-chat"></span>
                                        </div>
                                        <div class="cat-name">
                                            Chat
                                        </div>
                                    </a><!--./ cat-item -->

                                    <a href="listing-grid.html" class="cat-item">
                                        <div class="icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <div class="cat-name">
                                            Avatars
                                        </div>
                                    </a><!--./ cat-item -->
                                </div>
                            </div><!--./ features-cat-area -->
                            
                            <form action="listings.php" class="hero-search-form" method="POST">
                                <div class="inner-form">
                                    <div class="hero-form-input search">
                                        <input id="search" type="text" name="search_text" placeholder="Search a tool for your next big idea?" />
                                    </div><!--./ search -->
                                    <div class="hero-form-input submitbtn">
                                        <button class="btn btn-default" type="submit">Search A.I</button>
                                    </div><!--./ submitbtn -->
                                </div>
                            </form><!--./ hero-search-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--~./ end frontpage banner Section ~-->
    </div>
    <!--~./ end site content ~-->
    
    
    <!--********************************************************-->
    <!--********************** SITE FOOTER *********************-->
    <!--********************************************************-->
    <footer class="site-footer footer-default-style">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Footer Widget Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="footer-widget-area ptb-100">
            <div class="container">
                <div class="row">
                    <!--~~~~~ Start Widget About Footer ~~~~~--> 
                    <div class="col-lg-3">
                        <aside class="widget bt-about-footer-widget">
                            <div class="widget-content">
                                <div class="about-logo">
                                    <a href="index.php"><img src="assets/images/logo/ai_logo.png" alt="Logo"></a>
                                </div>
                                <p>At AiKloud, Our mission is to simplify your AI journey, making it effortless to find, compare, and choose the perfect AI tools for your ideas & projects.</p>
                                <ul class="social-share">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div><!--~./ end about footer widget ~-->
                    
                    <!--~~~~~ Start Widget List ~~~~~-->
                    <div class="col-lg-4">
                        <aside class="widget widget-list style-two">
                            <h2 class="widget-title">Featured Ai Categories</h2>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Chat</a></li>
                                    <li><a href="#">Copywriting</a></li>
                                    <li><a href="#">Coding</a></li>
                                    <li><a href="#">Storytelling</a></li>
                                    <li><a href="#">Imgae Creation</a></li>
                                    <li><a href="#">Audio to Text</a></li>
                                    <li><a href="#">Ads (Advertisement)</a></li>
                                    <li><a href="#">Data Analysis</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div><!--~./ end widget list ~-->
                    
                    <!--~~~~~ Start Widget List ~~~~~-->
                    <div class="col-lg-2">
                        <aside class="widget widget-list">
                            <h2 class="widget-title">Help</h2>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">help@aikloud.io</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Add AI Tool</a></li>
                                    <li><a href="#">Integrate with Us</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div><!--~./ end widget list ~-->
                    
                    <!--~~~~~ Start Subscribe Widget~~~~~-->
                    <div class="col-lg-3">
                        <aside class="widget tb-subscribe-widget">
                            <h4 class="widget-title">Subscribe With Us</h4>
                            <div class="widget-content">
                                <div class="subscribe-box">
                                    <p>Subscribe to our mailing list to get the new AI tools updates!</p>
                                    <div class="subscribe-form">
                                        <!-- Subscribe form -->
                                        <form class="dv-form" id="mc-form">
                                            <div class="form-group">
                                                <input id="mc-email" name="EMAIL" placeholder="Enter Your Email Address" type="email">
                                                <button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">Subscribe Now</button>
                                            </div>
                                        </form>
                                     </div>
                                </div>
                            </div>
                        </aside>
                    </div><!--~./ end subscribe widget ~-->
                </div>
            </div>
        </div>
        <!--~./ end footer widgets area ~-->
        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Popular brands Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="popular-brands-section bg-black ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--~~ Start Brands Carousel ~~-->
                        <div class="brands-carousel owl-carousel" style="padding-left: 30%;">
                        AI is not about replacing humans; it's about amplifying our capabilities, enabling us to achieve feats that were previously beyond our reach." - Kai-Fu Lee
                        </div><!--~./ end brands carousel ~-->
                    </div>
                </div>
            </div>
        </div><!--~./ end popular brands section ~-->
        
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Footer Bottom Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>© Copyright 2023 AiKloud. All Rights Reserved</p>
                        </div>
                    </div><!--~./ end copyright ~-->
                    <div class="col-lg-6  col-md-6">
                        <div class="footer-bottom-right">
                            <p><i class="fa fa-heart"></i> <a href="#">A Blacktech Company</a></p>
                        </div><!--~./ end footer menu ~-->
                    </div>
                </div>
            </div>
        </div><!--~./ end footer bottom area ~-->
    </footer>
    <!--~./ end site footer ~--> 
    
    
    <!-- jQuery js -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Masonary js -->
    <script src="assets/js/masonary.min.js"></script>
    <!-- Trackpad Scroll js -->
    <script src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>
    <!-- Sticky ResizeSensor js -->
    <script src="assets/js/ResizeSensor.min.js"></script>
    <!-- Sticky Sidebar js -->
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <!-- Sticky Youtube Video js -->
    <script src="assets/js/youtube-video.js"></script>
    <!-- Sticky Wan Spinner js -->
    <script src="assets/js/wan-spinner.js"></script>
    <!-- Rater js -->
    <script src="assets/js/rater.min.js"></script>
    <!-- Tabs Steps js -->
    <script src="assets/js/jquery-steps.min.js"></script>
    <!-- Range Slider js -->
    <script src="assets/js/rangeslider.min.js"></script>
    <!-- Kinetic js -->
    <script src="assets/js/kinetic.js"></script>
    <!-- Final Countdown js -->
    <script src="assets/js/jquery.final-countdown.min.js"></script>
    <!-- datetimepicker js -->
    <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Validate js -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!-- Plugin js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;"></script>
    <!-- Markerclusterer js -->
    <script src="assets/js/markerclusterer.js"></script>
    <!-- Maps js -->
    <script src="assets/js/maps.js"></script>
    <!-- Infobox js -->
    <script src="assets/js/infobox.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>
</html>