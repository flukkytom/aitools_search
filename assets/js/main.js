/*************************************************************************
    Template Name: Qamous
    Template URI: https://themeforest.net/qamous-html/
    Description: Qamous is a fully functional HtML theplate that gives you freedom to create any type of directory listing theme with tons of real time functionality for your real site. We did not make it just to present the demo, but to present each and every functionality from a real user's point of view.
    Author: Radiuzz
    Version: 1.0
    Author URI: https://themeforest.net/user/radiuzz
    
    Note: style js.
*************************************************************************/
/*

    ## Scroll top
    ## Mobile Menu
    ## Sticky Header
    ## All Scroll Bar
    ## Parallax Background
    ## Sticky Sidebar
    ## Count Down
    ## Mega Menu Carousel
    ## Featured Location Slider
    ## Client Review Carousel
    ## Brands Carousel
    ## Features Cat Carousel
    ## Todo Items Carousel
    ## Listing Todo Single
    ## Masonry
    ## Review Rating
    ## Single Product
    ## Listing Gallery
    ## spinner
    ## Youtube video trigger 
    ## Testimonail
    ## Price Distance Range
    ## Mega Menu Carousel
    ## Add Listing Tab
    ## Counter
 
==================================================
[ End table content ]
==================================================*/


(function($) {
    'use strict';
    
    var qamousApp = { 
        /* ---------------------------------------------
            ## Scroll top
        --------------------------------------------- */
        scroll_top: function () {
            $("body").append("<a href='#top' id='scroll-top' class='topbutton btn-hide'><span class='fa fa-angle-double-up'></span></a>");
            var $scrolltop = $('#scroll-top');
            $(window).on('scroll', function () {
                if ($(this).scrollTop() > $(this).height()) {
                    $scrolltop
                        .addClass('btn-show')
                        .removeClass('btn-hide');
                } else {
                    $scrolltop
                        .addClass('btn-hide')
                        .removeClass('btn-show');
                }
            });
            $("a[href='#top']").on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, "normal");
                return false;
            });
            
            $('.btn-register-now').on('click', function () {
                $('.user-signin-area').addClass('hidden');
                $('.user-signup-area').addClass('show');
            });
            
            $('.user-signin-area .btn-password').on('click', function () {
                $('.form-content-signin').addClass('hidden');
                $('.form-content-password').addClass('show');
            });
            
            $('.user-signin-area .btn-back').on('click', function () {
                $('.form-content-signin').removeClass('hidden');
                $('.form-content-password').removeClass('show');
            });
            
            $('.user-signup-area .form-btn-group .btn-signin').on('click', function () {
                $('.user-signin-area').removeClass('hidden');
                $('.user-signup-area').removeClass('show');
                $('.user-signin-area').addClass('show');
                $('.user-signup-area').addClass('hidden');
            });
        },
        
        /* ---------------------------------------------
            ## Mobile Menu
        --------------------------------------------- */
        mobile_menu: function () {
            var mobilesearch = $('.site-header .navigation-area .header-navigation-right').clone().appendTo('.mobile-menu');
            
            $('.dashborad-menu-area > .btn-close').on('click', function () {
                $('.dashborad-menu-area').toggleClass('active');
            });
            // mobile Menu
            //-------------------------------
            $('.site-navigation .mainmenu-area nav').meanmenu({
                meanMenuClose: "<i class='fa fa-close'></i>",
                meanMenuCloseSize: '18px',
                meanScreenWidth: '1199',
                meanExpandableChildren: true,
                meanMenuContainer: '.mobile-menu'
            });
        },
        
        /*-------------------------------------------
            ## Sticky Header
        --------------------------------------------- */
        sticky_header: function() {
            if ($('#sticky-header').length) {
                var stickyMenu = $('.site-header').clone().appendTo('#sticky-header');
                $(window).on('scroll', function() {
                    var w = $(window).width();
                    if (w > 992) {
                        if ($(this).scrollTop() > 350) {
                            $('#sticky-header').slideDown(500);
                        } else {
                            $('#sticky-header').slideUp(500);
                        }
                    }
                });
            } 
        },
        
        /*-------------------------------------------
            ## All Scroll Bar
        --------------------------------------------- */
        scroll_bar: function() {
            // qamous Sidebar Scroll
            //-------------------------------
            if ($('.listing-todo-main').length) {
                var $sidebar_scroll = $('.listing-todo-main');
                $sidebar_scroll.TrackpadScrollEmulator();
                $( window ).resize(function() {
                    setTimeout(function() {
                        $sidebar_scroll.TrackpadScrollEmulator('recalculate');
                    }, 250);
                });
            }
            // dashboard Menu Scroll
            //-------------------------------
            if ($('.dashborad-menu-main').length) {
                var $sidebar_scroll = $('.dashborad-menu-main');
                $sidebar_scroll.TrackpadScrollEmulator();
                $( window ).resize(function() {
                    setTimeout(function() {
                        $sidebar_scroll.TrackpadScrollEmulator('recalculate');
                    }, 250);
                });
            }
        },
        /*-------------------------------------------
            ## Nice select And Data Picker
        --------------------------------------------- */
        nice_select_data_picker: function () {
            if ($('select').length) {
                $('select').niceSelect();
            }
            
            if ($('#res_date').length) {
                $('#res_date').datetimepicker();
            }
        },
        
        /*-------------------------------------------
            ## Parallax Background
        --------------------------------------------- */
        bg_parallax: function () {
            if ($('.bg-parallax').length) {
                $('.bg-parallax').parallax("35%", -0.25);
            }
        },
        
        
        /*-------------------------------------------
            ## Sticky Sidebar
        --------------------------------------------- */
        sticky_sidebar: function() {
            if ($('.sidebar.sidebar-one').length) {
                $('.sidebar.sidebar-one').theiaStickySidebar({
                    'containerSelector': '.main-wrapper',
                    'additionalMarginTop': 0,
                    'minWidth': 992,
                });
            } 
            if ($('.sidebar.sidebar-two').length) {
                $('.sidebar.sidebar-two').theiaStickySidebar({
                    'containerSelector': '#listing_list',
                    'additionalMarginTop': 0,
                    'minWidth': 992,
                });
            } 
        },
        
        /* ---------------------------------------------
            ## Count Down
        --------------------------------------------- */
        count_down: function() {
            if ($('.countdown').length) {
                $('.countdown').final_countdown({
                    start: '1362139200',
                    end: '1409961320',
                    now: '1387991319',
                    seconds: {
                        borderColor: '#A02D50',
                        borderWidth: '2'
                    },
                    minutes: {
                        borderColor: '#A02D50',
                        borderWidth: '2'
                    },
                    hours: {
                        borderColor: '#A02D50',
                        borderWidth: '2'
                    },
                    days: {
                        borderColor: '#A02D50',
                        borderWidth: '2'
                    }
                });
            }
        },
        
        
        /*-------------------------------------------
            ## Featured Location Slider
        --------------------------------------------- */
        featured_location_slider: function() {
            if ($('.featured-location-carousel.style-one').length) {
                $('.featured-location-carousel.style-one').owlCarousel({
                    center: false,
                    items: 4,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 30,
                    singleItem : true,
                    dots: true,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: 4
                        }
                    }
                });   
            }
            if ($('.featured-location-carousel.style-two').length) {
                $('.featured-location-carousel.style-two').owlCarousel({
                    center: false,
                    items: 4,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 2,
                    singleItem : true,
                    dots: false,
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        },
                        1400: {
                            items: 4
                        }
                    }
                });   
            }
        },
        
        /*-------------------------------------------
            ## Client Review Carousel
        --------------------------------------------- */
        client_review_carousel: function() {
            if ($('#client-review-carousel').length) {
                $('#client-review-carousel').owlCarousel({
                    center: false,
                    items: 3,
                    smartSpeed: 800,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: true,
                    singleItem: false, 
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 3
                        },
                        1400: {
                            items: 3
                        }
                    }
                });     
            }
        },
        
        /* ---------------------------------------------
            ## Brands Carousel
         --------------------------------------------- */
        brands_carousel: function() {
            if ($('.brands-carousel').length) {
                $('.brands-carousel').owlCarousel({
                    center: false,
                    items: 4,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    margin: 0,
                    singleItem: false,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        500: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                });  
            }
        },
        
        /*-------------------------------------------
            ## Features Cat Carousel
        --------------------------------------------- */
        features_cat_carousel: function() {
            if ($('.features-cat-carousel').length) {
                $('.features-cat-carousel').owlCarousel({
                    center: true,
                    items: 5,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 10,
                    singleItem : true,
                    dots: false,
                    nav: false,
                    responsive: {
                        280: {
                            items: 2
                        },
                        520: {
                            items: 3
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            }
            if ($('.features-cat-carousel2').length) {
                $('.features-cat-carousel2').owlCarousel({
                    center: false,
                    items: 6,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 10,
                    singleItem : true,
                    dots: false,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        320: {
                            items: 2
                        },
                        400: {
                            items: 3
                        },
                        768: {
                            items: 4
                        },
                        992: {
                            items: 5
                        },
                        1200: {
                            items: 6
                        }
                    }
                });
            }
        },
        
        /*-------------------------------------------
            ## Todo Items Carousel
        --------------------------------------------- */
        todo_items_carousel: function() {
            if ($('.todo-items-carousel').length) {
                $('.todo-items-carousel').owlCarousel({
                    center: false,
                    items: 5,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 10,
                    singleItem : true,
                    dots: false,
                    nav: true,
                    navText: ["<span>prev</span>", "<span>next</span>"],
                    responsive: {
                        280: {
                            items: 1
                        },
                        575: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: 5
                        }
                    }
                });
            }
            
            if ($('.todo-items-carousel2').length) {
                $('.todo-items-carousel2').owlCarousel({
                    center: false,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 30,
                    singleItem : true,
                    dots: true,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 3
                        },
                        1400: {
                            items: 3
                        }
                    }
                });
            }
        },
        
        /*-------------------------------------------
            ## Listing Todo Single
        --------------------------------------------- */
        listing_todo_single: function() {
            if ($('.listing-todo-feature-list.carousel-nav-dots').length) {
                $('.listing-todo-feature-list.carousel-nav-dots').owlCarousel({
                    center: false,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 0,
                    singleItem : true,
                    dots: true,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        },
                        1400: {
                            items: 3
                        }
                    }
                });
            }
            if ($('.listing-todo-thumbnail-carousel').length) {
                $('.listing-todo-thumbnail-carousel').owlCarousel({
                    center: false,
                    items: 3,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 0,
                    singleItem : true,
                    dots: true,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        },
                        1400: {
                            items: 3
                        }
                    }
                });
            }
        },
        
        /* ---------------------------------------------
            ## Masonry
        --------------------------------------------- */
        grid_masonry: function () {
            var $container = $('#masonry');
            if ($container.length > 0) {
                $container.imagesLoaded(function(){
                  $container.masonry({
                    itemSelector : '.grid-item'
                  });
                });
            }
        },
        
        /* ---------------------------------------------
            ## Review Rating
        --------------------------------------------- */
        review_rating: function () {
            if ($('.review-rating').length > 0) {
                var options = {
                    max_value: 5,
                    step_size: 0.5,
                }
                $(".review-rating").rate(options);
            }
        },
        
        /* ---------------------------------------------
            ## Single Product
        --------------------------------------------- */
        single_product: function() {
            // Init Slider
            if ($('.product-detail-slide').length > 0) {
                $('.product-detail-slide').owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    nav: false,
                    dots: false
                });
            }

            if ($('.product-detail-slide').length > 0) {
                // Pref add class active to 1st thumbnail via js
                $('.thumbnails').eq(0).addClass('active');
                // When slider autoplay or drag is true 
                $('.product-detail-slide').on('changed.owl.carousel', function(event) {
                    $('.thumbnails').removeClass('active');
                    var sliders = 3;
                    var currentItem = event.item.index - 2;
                    if(currentItem >= sliders) {
                    currentItem = 0;
                    }
                    $('.thumbnails').eq(currentItem).addClass('active');
                });
               // When thumbnail is clicked
                $('.thumbnails a').click(function(event) {
                    event.preventDefault();
                    $('.thumbnails').removeClass('active');
                    var index = $('.thumbnails a').index(this);
                    $('.thumbnails').eq(index).addClass('active');
                    $('.product-detail-slide').trigger('to.owl.carousel', [index, 300, true]);
                });
            }
        },
        
        /* ---------------------------------------------
            ## Listing Gallery
        --------------------------------------------- */
        listing_gallery: function() {
            // Init Slider
            if ($('.listing-gallery-slide').length > 0) {
                $('.listing-gallery-slide').owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    dots: false,
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                });
            }

            if ($('.listing-gallery-slide').length > 0) {
                // Pref add class active to 1st thumbnail via js
                $('.thumbnails').eq(0).addClass('active');
                // When slider autoplay or drag is true 
                $('.listing-gallery-slide').on('changed.owl.carousel', function(event) {
                    $('.thumbnails').removeClass('active');
                    var sliders = 3;
                    var currentItem = event.item.index - 2;
                    if(currentItem >= sliders) {
                    currentItem = 0;
                    }
                    $('.thumbnails').eq(currentItem).addClass('active');
                });
               // When thumbnail is clicked
                $('.thumbnails a').click(function(event) {
                    event.preventDefault();
                    $('.thumbnails').removeClass('active');
                    var index = $('.thumbnails a').index(this);
                    $('.thumbnails').eq(index).addClass('active');
                    $('.listing-gallery-slide').trigger('to.owl.carousel', [index, 300, true]);
                });
            }
        },
        
        /* ---------------------------------------------
            ## spinner
        --------------------------------------------- */
        input_spinner: function() {
            var options_number = {
                maxValue: 100,
                minValue: 0
            }
            $(".input-spinner.product-no").WanSpinner(options_number);
            $(".input-spinner.number").WanSpinner(options_number);
        },
        
        /*-------------------------------------------
            ## Youtube video trigger 
        --------------------------------------------- */
        youtube_video: function() {
            if ($('.video-btn').length > 0) {
                $('.video-btn').yu2fvl();  
            }
        },
        
        /* ---------------------------------------------
            ## Testimonail
        --------------------------------------------- */
        testimonial: function () {
            if ($('#testimonial-carousel').length) {
                $('#testimonial-carousel').owlCarousel({
                    center: false,
                    items: 1,
                    margin: 0,
                    autoplay: true,
                    singleItem: true,
                    smartSpeed:500,
                    loop: true,
                    nav: false,
                    dots: true
                }); 
            }
        },
        
        /* ---------------------------------------------
            ## Price Distance Range
        --------------------------------------------- */
        price_distance_range: function () {
            if ($('#search_distance').length > 0) {
                var onMove = function(e, percentage) {
                    $(".distance-value").text((percentage).toFixed(0));
                }
                var range = new RangeSlider($("#search_distance"), {
                  percentage: 60,
                  onMove: onMove,
                  onDown: onMove,
                  pollLimit: 100
                });
            }
            if ($('#search_price').length > 0) {
                var onMove = function(e, percentage) {
                    $(".price-value").text((percentage/0.005).toFixed(0));
                }
                var range = new RangeSlider($("#search_price"), {
                  percentage: 30,
                  onMove: onMove,
                  onDown: onMove,
                  pollLimit: 100
                });
            }
        },
        
        /*-------------------------------------------
            ## Mega Menu Carousel
        --------------------------------------------- */
        mega_menu_carousel: function() {
            if ($('.mega-menu-content').length) {
                $('.mega-menu-content').owlCarousel({
                    center: false,
                    items: 5,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    smartSpeed: 800,
                    loop: true,
                    margin: 30,
                    singleItem : true,
                    dots: true,
                    nav: false,
                    responsive: {
                        280: {
                            items: 1
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        },
                        1400: {
                            items: 5
                        }
                    }
                });   
            }
        },
        
        /* ---------------------------------------------
            ## Add Listing Tab
        --------------------------------------------- */
        add_listing_tab: function() {
            if ($('#add-listing-tab').length > 0) {
                var frmInfo = $('#listinfo');
                var frmInfoValidator = frmInfo.validate();

                var frmloc = $('#listlocation');
                var frmlocValidator = frmloc.validate();

                var frmCat = $('#listcat');
                var frmCatValidator = frmCat.validate();

                $('#add-listing-tab').steps({
                    onChange: function (currentIndex, newIndex, stepDirection) {
                        // step1
                        if (currentIndex === 0) {
                            if (stepDirection === 'forward') {
                                return frmInfo.valid();
                            }
                            if (stepDirection === 'backward') {
                                frmInfoValidator.resetForm();
                            }
                        }
                        // step3
                        if (currentIndex === 2) {
                            if (stepDirection === 'forward') {
                                return frmloc.valid();
                            }
                            if (stepDirection === 'backward') {
                                frmlocValidator.resetForm();
                            }
                        }
                        // step4
                        if (currentIndex === 3) {
                            if (stepDirection === 'forward') {
                                return frmCat.valid();
                            }
                            if (stepDirection === 'backward') {
                                frmCatValidator.resetForm();
                            }
                        }
                        return true;
                    },
                    onFinish: function () {
                        alert('Wizard Completed');
                    }
                });
            }
        },
        /* ---------------------------------------------
            ## Circle Progress
        ---------------------------------------------- */
        circle_progress: function() {
            if ($('#circle').length > 0) {
                $('#circle').circleProgress({
                    value: 1,
                    size: 130,
                    fill: {
                        color: ["#F12C15"]
                    }
                });
            }
            if ($('#circle1').length > 0) {
                $('#circle1').circleProgress({
                    value: 1,
                    size: 130,
                    fill: {
                        color: ["#F12C15"]
                    }
                });
            }
        },
        /* ---------------------------------------------
            ## Tags Keyword
        ---------------------------------------------- */
        tag_keyword: function() {
            if ($('#tag-keyword').length > 0) {
                var tagInput1 = new TagsInput({
                    selector: 'tag-keyword',
                    duplicate : false,
                    max : 8
                });
                tagInput1.addData(['tags' , 'here'])
            }
        },
        
        /* ---------------------------------------------
            ## Line Chart
        ---------------------------------------------- */
        line_chart: function() {
            if ($('#simple-line-chart').length > 0) {
                new Chartist.Line('#simple-line-chart', {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    series: [
                        [1, 9, 7, 8, 5, 12, 5],
                        [2, 12, 9, 11, 7, 10, 3]
                    ]
                }, {
                    fullWidth: true,
                    axisY: {
                        labelInterpolationFnc: function(value) {
                            return (value * 500);
                        }
                    },
                    chartPadding: {
                        right: 40
                    },
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                });
            }
            if ($('#simple-line-chart2').length > 0) {
                //Simple line chart
                new Chartist.Line('#simple-line-chart2', {
                    labels: false,
                    series: [
                        [1, 9, 7, 8, 5, 12, 15],
                    ]
                }, {
                    fullWidth: true,
                    chartPadding: {
                        left: -20
                    },
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                });
            }
        },
        
        
        /* ---------------------------------------------
            ## Counter
        --------------------------------------------- */
        counter: function () {
            if ($('#counter').length > 0) {
                var a = 0;
                $(window).on('scroll', function() {
                    var oTop = $('#counter').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                        $('.counter-value').each(function() {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            $({
                                countNum: $this.text()
                            }).animate({
                                countNum: countTo
                            }, {
                                duration: 2000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum))
                                },
                                complete: function() {
                                    $this.text(this.countNum)
                                }
                            })
                        });
                        a = 1
                    }
                })
            }
        },
        
    
        /* ---------------------------------------------
         function initializ
         --------------------------------------------- */
        initializ: function() {          
            qamousApp.scroll_top();                      
            qamousApp.mobile_menu();          
            qamousApp.sticky_header();         
            qamousApp.scroll_bar();         
            qamousApp.nice_select_data_picker(); 
            qamousApp.bg_parallax(); 
            qamousApp.sticky_sidebar(); 
            qamousApp.count_down(); 
            qamousApp.featured_location_slider();         
            qamousApp.client_review_carousel();        
            qamousApp.brands_carousel();   
            qamousApp.features_cat_carousel();  
            qamousApp.todo_items_carousel();
            qamousApp.listing_todo_single();        
            qamousApp.grid_masonry();        
            qamousApp.review_rating();        
            qamousApp.single_product();        
            qamousApp.listing_gallery();        
            qamousApp.input_spinner();        
            qamousApp.youtube_video();        
            qamousApp.testimonial();        
            qamousApp.price_distance_range(); 
            qamousApp.mega_menu_carousel(); 
            qamousApp.add_listing_tab();  
            qamousApp.circle_progress();  
            qamousApp.line_chart();  
            qamousApp.tag_keyword();  
            qamousApp.counter();  
        }
    };

    /* ---------------------------------------------
     Document ready function
     --------------------------------------------- */
    $(function() {
        qamousApp.initializ();
    }); 
    

})(jQuery);
