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
    
	<link defer rel="preload" as="style" data-href="<?= base_url("assets/css/bootstrap.min.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/owl.carousel.min.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/slicknav.css") ?>">
    <link async rel="preload" as="style" data-href="<?= base_url("assets/css/flaticon.css") ?>">
    <link async rel="preload" as="style" data-href="<?= base_url("assets/css/gijgo.css") ?>">
	<link defer rel="preload" as="style" data-href="<?= base_url("assets/css/animate.min.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/magnific-popup.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/fontawesome-all.min.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/themify-icons.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/slick.css") ?>">
	<link async rel="preload" as="style" data-href="<?= base_url("assets/css/nice-select.css") ?>">
	<link async rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <style>
        
        .preloader {
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            margin: 0 auto
        }

        .preloader .preloader-circle {
            width: 100px;
            height: 100px;
            position: relative;
            border-style: solid;
            border-width: 1px;
            border-top-color: #1e4f8c;
            border-bottom-color: transparent;
            border-left-color: transparent;
            border-right-color: transparent;
            z-index: 10;
            border-radius: 50%;
            -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            background-color: #fff;
            -webkit-animation: zoom 2000ms infinite ease;
            animation: zoom 2000ms infinite ease;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s
        }

        .preloader .preloader-circle2 {
            border-top-color: #0078ff
        }

        .preloader .preloader-img {
            position: absolute;
            top: 50%;
            z-index: 200;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            display: inline-block;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            padding-top: 6px;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s
        }

        .preloader .preloader-img img {
            max-width: 55px
        }

        .preloader .pere-text strong {
            font-weight: 800;
            color: #dca73a;
            text-transform: uppercase
        }
        
@-webkit-keyframes heartbeat {
	to {
		-webkit-transform: scale(1.03);
		transform: scale(1.03)
	}
}

.rotateme {
	-webkit-animation-name: rotateme;
	animation-name: rotateme;
	-webkit-animation-duration: 30s;
	animation-duration: 30s;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	animation-timing-function: linear
}

@keyframes rotateme {
	from {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg)
	}
	to {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}

@-webkit-keyframes rotateme {
	from {
		-webkit-transform: rotate(0deg)
	}
	to {
		-webkit-transform: rotate(360deg)
	}
}

@-webkit-keyframes zoom {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}
}

@keyframes zoom {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}
}
/* .about-area iframe {
  width: 100% !important;
} */
.fcontainer {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
    </style>
</head>
<body>

    <?= $this->renderSection('header') ?>
    
    <main style="clear: both;">
        <?= $this->renderSection('content') ?>
    
        
        
        
        
    </main>

    
    <?= $this->renderSection('footer') ?>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url("./assets/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    <!-- JS here -->

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $.each($("script[rel=preload]"), function(a,b) {
                    // console.log(a)
                    // console.log(b)
                    var p = new Promise((resolve, reject) => {
                        // console.log("teste")
                        $(b)
                        .attr("src", $(b).data("src")).removeAttr("rel")
                        resolve("OK")
                        // .attr("rel", "stylesheet")
                    }).then(()=>{
                        // console.log("resolvido")
                    })
                    
                })
                // $("link[rel=preload]")
                // .attr("href", $("link[rel=preload]").data("href"))
                // .attr("rel", "stylesheet")

                $.each($("link[rel=preload]"), function(a,b) {
                    // console.log(a)
                    // console.log(b)
                    $(b)
                    .attr("href", $(b).data("href"))
                    .attr("rel", "stylesheet")
                })
            }, 240);
        }) 

        document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        // lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Possibly fall back to event handlers here
            }
        });
        /* 1. Proloder */
        $(window).on('load', function () {
            $('#preloader-active').delay(250).fadeOut('slow');
            $('body').delay(250).css({
                'overflow': 'visible'
            });
        });
    </script>
    
    
    <script rel="preload" async data-src="<?= base_url("./assets/js/popper.min.js") ?>"></script>
    <script rel="preload" data-src="<?= base_url("./assets/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("./assets/js/vendor/modernizr-3.5.0.min.js") ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script rel="preload" data-src="<?= base_url("./assets/js/wow.min.js") ?>"></script>
    <script rel="preload" async data-src="<?= base_url("./assets/js/animated.headline.js") ?>"></script>
    <script rel="preload" async data-src="<?= base_url("./assets/js/jquery.magnific-popup.js") ?>"></script>
    
    <!-- Date Picker -->
    <script src="<?= base_url("./assets/js/gijgo.min.js") ?>"></script>

    <!-- Jquery Mobile Menu -->
    <script rel="preload" data-src="<?= base_url("./assets/js/jquery.slicknav.min.js") ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script rel="preload"  data-src="<?= base_url("./assets/js/owl.carousel.min.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/slick.min.js") ?>"></script>
    
    <!-- Nice-select, sticky -->
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.nice-select.min.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.sticky.js") ?>"></script>
    
    <!-- counter , waypoint -->
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.counterup.min.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/waypoints.min.js") ?>"></script>
    
    <!-- contact js -->
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.validate.min.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.ajaxchimp.min.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/jquery.form.js") ?>"></script>
    <script rel="preload"  data-src="<?= base_url("./assets/js/contact.js") ?>"></script>
    <?php /*<script rel="preload"  data-src="<?= base_url("./assets/js/mail-script.js") ?>"></script> */ ?>
    
    <!-- Jquery Plugins, main Jquery -->	
    <!-- <script rel="preload"  data-src="<?= base_url("./assets/js/plugins.js") ?>"></script> -->
    <script rel="preload"  data-src="<?= base_url("./assets/js/main.js?".time()) ?>"></script>
    <script>
        
        var base_url = '<?= base_url('/') ?>';
    </script>
    </body>
</html>