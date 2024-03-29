 <!--? Preloader Start -->
 <div id="preloader-active">
    <div class="preloader" style="display: flex; justify-content: center;align-items: center;">
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


<header style="z-index: 9999 !important; position:relative">
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <!-- Left Social -->
                <div class="header-left-social">
                    <ul class="header-social">    
                        <li> <a href="https://www.instagram.com/brasilatuarial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/brasilatuarialbh" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://wa.me/3125108536?text=Ol%C3%A1%2C%20como%20vai%3F" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <!-- <li><a href="https://www."><i class="fab fa-linkedin-in"></i></a></li> -->
                    </ul>
                </div>
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li>contato@brasilatuarial.com.br</li>
                                    <li>(31) 2510-8536</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>    
                                    <!-- <li><a href="#"><i class="ti-user"></i>Login</a></li> -->
                                    <!-- <li><a href="#"><i class="ti-lock"></i>Registrar</a></li> -->
                                    <li id="quero-conhecer-topbar"><a target="_blank" href="<?= base_url("/lp") ?>">Quero conhecer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* <div class="header-top d-none d-lg-block">
                <div class="container-fluid px-0">
                    <div class="row header-left-social  px-0">
                        <div class="col-md-2 px-0" style="width: 222px">
                            <ul class="header-social">    
                                <li><a href="https://wa.me/3125108536?text=Ol%C3%A1%2C%20como%20vai%3F" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.facebook.com/brasilatuarialbh"><i class="fab fa-facebook-f"></i></a></li>
                                <!-- <li><a href="https://www."><i class="fab fa-linkedin-in"></i></a></li> -->
                                <li> <a href="https://www.instagram.com/brasilatuarial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-10 px-0">
                            <div class="header-info-left">
                                <ul>     
                                    <li>contato@brasilatuarial.com.br</li>
                                    <li>(31) 2510-8536</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <!-- <ul>    
                                    <li><a href="#"><i class="ti-user"></i>Login</a></li>
                                    <li><a href="#"><i class="ti-lock"></i>Registrar</a></li>
                                </ul> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div> */ ?>
            <div class="header-bottom header-sticky" style="">
                <!-- Logo -->
                <div class="logo d-none d-lg-block">
                    <a href="<?= base_url("/") ?>"><img src="<?= base_url("assets/img/logo/logo.png") ?>" alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none">
                            <a href="<?= base_url("/") ?>"><img src="<?= base_url("assets/img/logo/logo.png") ?>" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation"> 
                                    <?php foreach($main_menu as $mm) {
                                        //    print_r($c);
                                        if($mm->route) {
                                            $route = base_url($mm->route);
                                        } else {
                                            $route = "#";
                                        }
                                        echo '<li><a href="'. $route .'">'.$mm->text . '</a>';
                                        if(isset($mm->chield)) {
                                            echo '<ul class="submenu">';
                                            foreach($mm->chield as $cc) {
                                                if($cc->route) {
                                                    $route = base_url($cc->route);
                                                } else {
                                                    $route = "#";
                                                }
                                                echo '<li><a href="'. $route .'">'.$cc->text . '</a>';
                                                if(isset($cc->chield)) {
                                                    echo '<ul class="subsubmenu">';
                                                    foreach($cc->chield as $ccc) {
                                                        if($ccc->route) {
                                                            $route = base_url($ccc->route);
                                                        } else {
                                                            $route = "#";
                                                        }
                                                        echo '<li><a href="'. $route .'">'.$ccc->text . '</a></li>';
                                                    }
                                                    echo "</ul></li>";
                                                } else {
                                                    echo '</li>';
                                                }
                                            }
                                            echo "</ul></li>";
                                        } else {
                                            echo '</li>';
                                        }
                                    }
                                    ?>                                                                            
                                    <li id="quero-conhecer-menu"><a target="_blank" href="<?= base_url("/lp") ?>">Quero conhecer</a></li>
                                </ul>
                                <!-- <ul id="navigation">                                                                                          
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="sobre.html">Sobre</a></li>
                                    <li><a href="cursos.html">Cursos e Palestras</a></li>
                                
                                    <li><a href="blog.html">Soluções</a>
                                        <ul class="submenu">
                                            <li><a href="#">Brasil Atuarial</a></li>
                                            <li><a href="#">Brasil Plataformas</a></li>
                                            <li><a href="#">Agência Brasil Digital</a></li>
                                            <li><a href="#">Dygo (Plataforma Ead)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contato.html">Contato</a></li>
                                </ul> -->
                            </nav>
                        </div>
                        
                        <!-- Header-btn -->
                        <div class="header-search d-none d-lg-block">
                            <form id="search-form" action="#" class="form-box f-right ">
                                <input type="text" name="Search" value="<?= (isset($query)) ? $query : ''?>" id="search-term" placeholder="Pesquisar">
                                <div class="search-icon">
                                    <i class="fas fa-search special-tag"></i>
                                </div>
                            </form>
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