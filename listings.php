<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "functions.php";
include "settings.php";


// Check if the form has been submitted and the "search_text" key is set in $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search_text"])) {
    // Process the form data
    $url = $search_endpoint; // Replace with your endpoint URL
    $postData = array(
      'search' => $_POST['search_text']
    );

    $responseData = sendPostRequest($url, $postData);
}
else {
    // Redirect to another page
    header("Location: index.php");
}


// Recent Search
$recent_searches = getRecentSearch($recent_search_endpoint);

// Recent Search
$category_group = getRecentSearch($category_endpoint);
?>
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
    <header class="site-header header-style-one">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Navigation
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="site-navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar navbar-expand-lg navigation-area">
                            <div class="site-logo-block">
                                <a class="navbar-brand site-logo" href="index.php">
                                    <img src="assets/images/logo/ai_logo.png" alt="logo">
                                </a>  
                            </div><!--~./ site-logo-block ~-->
                            
                            <div class="mainmenu-area">
                            </div><!--~./ mainmenu-wrap ~-->
                            
                            <div class="header-navigation-right">
                                <div class="add-listing-area">
                                    <a class="btn btn-default" href="<?php echo $member_endpoint; ?>" target="_blank">+ add Ai Tool</a>
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
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Page Title Area
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="page-title-area text-white bg-image bg-overlay" style="background-image:url(assets/images/bg/aikloud_bg2.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hero-search-form style-two" method="POST">
                            <div class="inner-form">
                                <div class="hero-form-input search">
                                    <input id="search" type="text" placeholder="Let's help you find your next Ai Tool." name="search_text" />
                                </div><!--~./ search ~-->
                                <div class="hero-form-input submitbtn">
                                    <button class="btn btn-default" type="submit">Search Ai Db</button>
                                </div><!--~./ location ~-->
                            </div>
                        </form><!--./ hero-search-form -->
                        <div class="breadcrumb-content-area">
                            <div class="page-header-caption">
                                <h1>Search Results</h1>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>  
                                    <li aria-current="page" class="breadcrumb-item active">Ai Tools Database</li>
                                </ol>
                            </div>
                        </div>
                    </div><!--~~./ page-header-content ~~-->
                </div>
            </div>
        </div><!--~~./ end container ~~-->
    </div>
    <!--~~./ end page title area ~~-->
    
    
    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="main-wrapper ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--~~~~~ Start Site Main ~~~~~-->
                        <main class="site-main">
                            <div class="tab-content filter-tab-content">
                                 
                                <!--~~~~~ Start Tab Pane ~~~~~--> 
                                <div class="tab-pane fade show active" id="listing_list" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!--~~~~~ Start Popular Todo Item ~~~~~-->
                                            <?php
                                                if ($responseData) {
                                                    foreach ($responseData as $tool) {
                                            ?>
                                            <div class="popular-todo-item todo-item-list">
                                                <div class="todo-thumbnail-area">
                                                    <figure class="item-thumb" style="width: 370px; height: 270px">  
                                                    <img src="<?php if ($tool['image_url'] and $tool['image_url']!="None") { echo $tool['image_url'] ; } else { echo "assets/images/bg/aikloud_bg3.png"; }?>" alt="Thumbnail">
                                                    </figure><!--./ item-thumb -->
                                                    <div class="todo-overlay-info">
                                                        <div class="todo-type rated">AI TOOL</div>
                                                        <div class="todo-meta-bottom">
                                                            <a href="#" class="save">
                                                                <i class="fa fa-heart"></i>
                                                                <?php echo $tool['pricing']; ?>
                                                            </a>
                                                            <a href="#" class="photo">
                                                                <i class="fa fa-image"></i>
                                                                Rated
                                                            </a>
                                                        </div>
                                                    </div><!--./ todo-overlay-info -->
                                                </div><!--./ todo-thumbnail-area -->

                                                <div class="content-entry-wrap">
                                                    <div class="todo-content">
                                                        <h3 class="title"><a href="listing-details.html"><?php echo $tool['title']; ?></a></h3>
                                                        <div class="todo-rating">
                                                            <div class="rating-value">
                                                                <span><?php echo $tool['rating']; ?></span>
                                                            </div>
                                                            <div class="rating-icon">
                                                                <!-- <ul>
                                                                    <li class="yellow">$</li>
                                                                    <li class="yellow">$</li>
                                                                    <li class="yellow">$</li>
                                                                    <li>$</li>
                                                                </ul> -->
                                                            </div>
                                                        </div><!--./ todo-rating -->
                                                        <div class="todo-meta">
                                                            <div class="todo-location">
                                                                <span class="icon-location"></span>
                                                                <?php echo $tool['website']; ?>       
                                                            </div>
                                                            <div class="todo-number">
                                                                <span class="icon-email"></span>
                                                                <?php echo $tool['business_email']; ?>       
                                                            </div>
                                                        </div><!--./ todo-meta -->
                                                        <div class="todo-summary">
                                                           <p><?php echo $truncatedText = substr($tool['description'], 0, 120); ?> ...</p>
                                                        </div>
                                                    </div><!--./ todo-content -->
                                                    <div class="todo-footer">
                                                        <a href="#" class="todo-cat todo-cat-restaurant">
                                                            <span class="icon-qrcode"></span>
                                                            <?php echo $tool['category']; ?>
                                                        </a>
                                                        <a href="listing-details.html" class="todo-status">
                                                            TRY Ai TOOL
                                                        </a>
                                                    </div><!--./ todo-footer -->
                                                </div><!--./ content-entry-wrap -->
                                            </div><!--~./ end popular todo item ~-->
                                            <?php 
                                                    } // end for each  
                                                } // end if 
                                                else {
                                                        echo "<h3>I'm sorry, I've got no data with that search text.</h3>";
                                                }
                                            ?>
                                            
                                            
                                            
                                            <!--~~~~~ Start Paging Navigation ~~~~~-->
                                            <nav class="navigation paging-navigation pagination-center">
                                                <ul class="nav-links">
                                                    <!--<li class="nav-previous"> 
                                                        <a href="#">Previous</a>
                                                    </li>                                     
                                                     <li><a href="#">1</a></li>
                                                    <li class="active"><a href="#" class="page-numbers">2</a></li>
                                                    <li><a href="#" class="page-numbers">3</a></li>
                                                    <li><a href="#" class="page-numbers">4</a></li>
                                                    <li class="nav-next">
                                                        <a href="#">Next</a>
                                                    </li>   -->
                                                </ul>
                                            </nav><!--~./ end paging navigation ~-->
                                        </div>
                                        
                                        <!--~~~~~ Start sidebar ~~~~~-->
                                        <div class="col-lg-4">
                                            <div class="sidebar sidebar-two">
                                                
                                                <!--~~~~ Start Widget Todo Categories ~~~~-->
                                                <aside class="widget widget-todo-categories">
                                                    <h4 class="widget-title"><span class="icon-list1"></span>Top Five Categories</h4>
                                                    <div class="widget-content">
                                                        <ul> 
                                                        <?php
                                                            if ($category_group) {
                                                                foreach ($category_group as $category) {
                                                        ?>
                                                        <li class="cat-item">
                                                            <a href="#"><?php echo $category['category_name']; ?><span class="count"><?php echo $category['category_count']; ?></span></a>
                                                        </li>
                                                        <?php
                                                                }
                                                            }
                                                        ?>

                                                        </ul>
                                                    </div>
                                                </aside><!--~./ end widget todo categories ~-->
                                                
                                                <!--~~~~ Start Recent View Todo Widget ~~~~-->
                                                <aside class="widget widget-recent-view-todo">
                                                    <h4 class="widget-title"><span class="icon-eye22"></span>Recent Viewed Ai Tools</h4>
                                                    <div class="widget-content">
                                                        <!--~~~~~ Start Todo Item ~~~~~-->
                                                        <?php
                                                            if ($recent_searches) {
                                                                foreach ($recent_searches as $search) {
                                                        ?>
                                                        <div class="todo-side-item popular-todo-item">
                                                            <div class="todo-thumbnail-area">
                                                                <figure class="item-thumb">  
                                                                    <img src="<?php if ($search['image_url'] and $search['image_url']!="None") { echo $search['image_url'] ; } else { echo "assets/images/bg/aikloud_bg4.png"; }?>" alt="Thmubnail"> 
                                                                </figure><!--./ item-thumb -->
                                                            </div><!--./ todo-thumbnail-area -->

                                                            <div class="content-entry-wrap">
                                                                <div class="todo-content">
                                                                    <h3 class="title"><a href="#"><?php echo $search['title']; ?></a></h3>
                                                                    <div class="todo-rating">
                                                                        <div class="rating-value">
                                                                            <span><?php echo $search['rating']; ?></span>
                                                                        </div>
                                                                    </div><!--./ todo-rating -->
                                                                    <div class="todo-meta">
                                                                        <div class="todo-location">
                                                                            <span class="icon-location"></span>
                                                                            <?php echo $search['website']; ?>   
                                                                        </div>
                                                                        <div class="todo-number">
                                                                            <span class="icon-email"></span>
                                                                            <?php echo $search['business_email']; ?>  
                                                                        </div>
                                                                    </div><!--./ todo-meta -->
                                                                </div><!--./ todo-content -->
                                                            </div><!--./ content-entry-wrap -->
                                                        </div><!--~./ end todo item ~-->
                                                        <?php 
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </aside><!--~./ end recent view todo widget ~-->
                                            </div>
                                        </div><!--~./ end sidebar ~-->
                                    </div>
                                </div><!--~./ end tab pane ~-->
                            </div> 
                        </main><!--~./ end site main ~-->
                    </div>
                </div>
            </div>
        </div><!--~./ end main wrapper ~-->
    </div>
    <!--~./ end site content ~-->
    
    
    
    <!--********************************************************-->
    <!--********************** SITE FOOTER *********************-->
    <!--********************************************************-->
    <footer class="site-footer footer-default-style footer-style-two bg-image bg-overlay" style="background-image:url('http://via.placeholder.com/1920x475')">
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
                                    <a href="index.php"><img src="assets/images/logo/ai_logo_white.png" alt="Logo"></a>
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
        </div><!--~./ end footer widgets area ~-->
        
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