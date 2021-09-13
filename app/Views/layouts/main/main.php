<!doctype html>
<html class="no-js" lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Brasil Atuarial </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("/assets/img/favicon_io/apple-touch-icon.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("/assets/img/favicon_io/favicon-32x32.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("/assets/img/favicon_io/favicon-16x16.png") ?>">
    <link rel="manifest" href="<?= base_url("/assets/img/favicon_io/site.webmanifest") ?>">

    <!-- <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" /> -->
    <meta property="og:locale" content="pt_BR" />
	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/owl.carousel.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/slicknav.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/flaticon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/gijgo.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/animate.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/magnific-popup.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/fontawesome-all.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/themify-icons.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/slick.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/nice-select.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <style>
        .team-img img {
            object-fit: cover;
            max-height: 300px;
            object-position: center top;

        }
    </style>
</head>
<body>

    <?= $this->renderSection('header') ?>
    
    <main>
        <?= $this->renderSection('content') ?>
    
        
        
        <!--? Popular Course Start 
        <div class="popular-course section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                  
                        <div class="section-tittle text-center mb-70">
                            <span>Most Popular Course Of This Week</span>
                            <h2>Our Popular Course</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                    
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub1.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Graphic Design</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
       
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub2.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Web Development</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
               
                        <div class="single-course mb-40">
                            <div class="course-img">
                                <img src="assets/img/gallery/popular_sub3.png" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#">Digital Marketing</a></h4>
                                </div>
                                <div class="course-cap-mid d-flex justify-content-between">
                                    <div class="course-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <ul><li>52 Review</li></ul>
                                </div>
                                <div class="course-cap-bottom d-flex justify-content-between">
                                    <ul>
                                        <li><i class="ti-user"></i> 562</li>
                                        <li><i class="ti-heart"></i> 562</li>
                                    </ul>
                                    <span>Free</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="courses.html" class="btn">Find More Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Course End -->
        
        
    </main>

    
    <?= $this->renderSection('footer') ?>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="<?= base_url("./assets/js/vendor/modernizr-3.5.0.min.js") ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url("./assets/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/bootstrap.min.js") ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url("./assets/js/jquery.slicknav.min.js") ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url("./assets/js/owl.carousel.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/slick.min.js") ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url("./assets/js/wow.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/animated.headline.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.magnific-popup.js") ?>"></script>

    <!-- Date Picker -->
    <script src="<?= base_url("./assets/js/gijgo.min.js") ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url("./assets/js/jquery.nice-select.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.sticky.js") ?>"></script>
    
    <!-- counter , waypoint -->
    <script src="<?= base_url("./assets/js/jquery.counterup.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/waypoints.min.js") ?>"></script>
    
    <!-- contact js -->
    <script src="<?= base_url("./assets/js/contact.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.form.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.validate.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/mail-script.js") ?>"></script>
    <script src="<?= base_url("./assets/js/jquery.ajaxchimp.min.js") ?>"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url("./assets/js/plugins.js") ?>"></script>
    <script src="<?= base_url("./assets/js/main.js") ?>"></script>
    <script>
        var base_url = '<?= base_url('/') ?>';
    </script>
    </body>
</html>