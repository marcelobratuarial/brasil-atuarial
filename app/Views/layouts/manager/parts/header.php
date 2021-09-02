 <!--? Preloader Start -->
 <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?= base_url("assets/img/logo/loder.png") ?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<!-- <a href="<?= base_url('/'). route_to('hoome') ?>">Teste</a> -->


<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header " style="padding-top: 20px;">
            <div class="header-top d-none d-lg-block" style="border-bottom: none">
                <!-- Left Social -->
                <!-- <div class="header-left-social">
                    <ul class="header-social">    
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div> -->
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                
                            </div>
                            <div class="header-info-right">
                                <ul>    
                                    <li><a href="#"><i class="ti-user"></i><?= $dash['usession']->get('name') ?></a></li>
                                    <li><a href="<?= base_url("logout") ?>"><i class="ti-lock"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div style="background: transparent; float: none; padding: 0; " class="logo d-none d-lg-block">
                    <a href="<?= base_url("/") ?>"><img src="<?= base_url("assets/img/logo/logo.png") ?>" alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper " style="justify-content: center;">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none">
                            <a href="<?= base_url("/") ?>"><img src="<?= base_url("assets/img/logo/logo.png") ?>" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                
                                <ul id="navigation">                                                                                          
                                    <li><a style="padding-top: 30px; padding-bottom: 10px" href="<?= base_url("/dashboard") ?>">Inicio</a></li>
                                    <li><a style="padding-top: 30px; padding-bottom: 10px" href="<?= base_url("/dash/posts-list") ?>">Posts</a></li>
                                    <li><a style="padding-top: 30px; padding-bottom: 10px" href="<?= base_url("/dash/categories-list") ?>">Categorias</a></li>
                                    <!-- <li><a style="padding-top: 10px; padding-bottom: 10px" href="contato.html">Contato</a></li> -->
                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Header-btn -->
                        <div class="header-search d-none d-lg-block">
                            
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>