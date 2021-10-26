<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("/assets/img/favicon_io/apple-touch-icon.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("/assets/img/favicon_io/favicon-32x32.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("/assets/img/favicon_io/favicon-16x16.png") ?>">
    <link rel="manifest" href="<?= base_url("/assets/img/favicon_io/site.webmanifest") ?>">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url("/assets/css/intro/demo.css") ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url("/assets/css/intro/common.css") ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url("/assets/css/intro/style.css") ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url("/assets/css/intro/style4.css") ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
    <title>Grupo Brasil Atuarial</title>
     <style>
        body, * {
            font-family: 'Montserrat', sans-serif !important;
        }
        li .ch-item {
            cursor: pointer;
        }
        .display.show {
            z-index: 10;
            opacity: 1;
        }
        .display.active {
            position: fixed;
            display: flex !important;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            transition: all 1s ease;
        }
        .display.active .container-content > div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
       
        .display.active .container-content {
            opacity: 1;
            transition: all 1s ease;
            background: #fff;
            max-width: 555px;
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border: solid 1px #c2c2c2;
            padding: 30px;
            border-radius: 30px;
        }
        
        .display.active .container-content .logo-place {
            transform: translate(-110px, -150px);
            width: auto;
            height: auto;
            background: red;
        }
        .display.active .content {
            opacity: 1;
            transition: all 0.2s ease;
            /* background: #fff; */
            text-align: center;
            margin-top: 50px;
        }
        .display .content {
            opacity: 0;
            /* display: none; */
            transition: all 0.2s ease;
        }
        .display {
            cursor: pointer;
            z-index: -1;
            opacity: 0;
            transition: all 1s ease;
            /* display: none; */
            position: absolute;
            background: transparent !important;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #fff;
            /* display: flex; */
            align-items: center;
            justify-content: space-evenly;
            transition: all 1s ease;
        }
        
        .display div > img {
            max-width: 160px;
            cursor: pointer;
            transition: all 1s ease;
            
        }
        .content {
            transition: all 1s ease;
            display: none;
        }  
        .content .btn {
            padding: 20px 24px;
        }
        .btn {
            background: #1e4f8c;
            padding: 10px 14px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            border-radius: 0px;
            -moz-user-select: none;
            font-weight: 400;
            letter-spacing: 1px;
            line-height: 0;
            margin-bottom: 0;
            margin: 10px;
            cursor: pointer;
            transition: color 0.4s linear;
            position: relative;
            z-index: 1;
            border: 0;
            overflow: hidden;
            margin: 0
        }

        .btn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 101%;
            height: 101%;
            background: #3e44ec;
            z-index: 1;
            border-radius: 5px;
            transition: transform 0.5s;
            transition-timing-function: ease;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleX(0);
            border-radius: 0px
        }

        .btn:hover::before {
            transform: scaleX(1);
            color: #fff !important;
            z-index: -1
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: none
        }
        @media (max-width: 768px) {
            
            .display.active .container-content {
                width: 80%;
            }
            /* .wrap div > img, .display div > img {
                margin-top: 50px;
            } */
            h1 {
                font-size: 1.8rem;
            }
            .content .btn {
                padding: 20px 12px;
            }
        }
     </style>
</head>

<body>
    <div class="container" style="position: absolute">
		
        <h1>Seja bem-vindo ao <br>Grupo Brasil Atuarial</h1>
        
        <section class="main">
        
            <ul class="ch-grid">
                <li>
                    <div class="ch-item ch-img-1">				
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"></div>
                                <div class="ch-info-back">
                                    <h3>BRASIL ATUARIAL</h3>
                                    <p>CONSULTORIA</p>
                                    <form action="<?= base_url("/atuarial")?>" method="get">
                                        <button class="btn btn-primary">
                                            Acessar
                                        </button>
                                    </form>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <img src="<?= base_url("assets/img/grupo-logos/brasil-atuarial.png") ?>" /> -->
                        <p>Nós somos uma empresa de desenvolvimento de Consultoria Atuarial para Entidades do 3 Setor e Insurtechs.</p>
                        <p>Atualmente somos a empresa que fornece gratuitamente a maior gama de conteúdos sobre o segmento Mutualista.</p>
                        <form action="<?= base_url("/atuarial")?>" method="get">
                            <button class="btn btn-primary">
                                Acessar
                            </button>
                        </form>
                        
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-2">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2"></div>
                                <div class="ch-info-back">
                                    <h3>DYGO</h3>
                                    <p>Universidade Corporativa</p>
                                    <a class="btn btn-primary" href="https://dygo.com.br">Acessar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <img src="<?= base_url("assets/img/grupo-logos/dygo.jpg") ?>" /> -->
                        <p>A DYGO é a primeira plataforma de Ensino a Distância do Brasil totalmente personalizada para Entidades Mútuas com cursos 
                            100% online e avaliação de desempenho do aprendizado após o treinamento, possibilitando dessa forma a 
                            expansão da atividade das Entidades a nível nacional com qualificação garantida.</p>
                            <a class="btn btn-primary" href="https://dygo.com.br" class="btn btn-primary">Acessar</a>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-3">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                    <h3>BRASIL BENEFÍCIOS</h3>
                                    <p>CENTRAL DE BENEFÍCIOS</p>
                                    <a class="btn btn-primary" href="https://brasilbeneficios.club">Acessar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <img src="<?= base_url("assets/img/grupo-logos/brasil-beneficios.svg") ?>" /> -->
                        <p>Nós somos uma empresa de fornecimento e gestão de Benefícios para Entidades do 3 Setor, Sindicatos, Cooperativas e 
                            Federações. Em uma relação 100% digital, entregamos as melhores soluções em Benefícios do Brasil.</p>
                        <a href="https://brasilbeneficios.club" class="btn btn-primary">Acessar</a>
                    </div>
                </li>
                
                <li>
                    <div class="ch-item ch-img-4">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"></div>
                                <div class="ch-info-back">
                                    <h3>BRASIL DIGITAL</h3>
                                    <p>AGÊNCIA DE MARKETING</p>
                                    <a class="btn btn-primary" href="https://agenciabrasildigital.com.br">Acessar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <img src="<?= base_url("assets/img/grupo-logos/agencia-brasil-digital.png") ?>" /> -->
                        <p>Nós somos uma agência de marketing digital que conta com um hub de profissionais multidisciplinares focados em resultados.</p>
                        <a href="https://agenciabrasildigital.com.br" class="btn btn-primary">Acessar</a>
                    </div>
                </li>
                
            </ul>
            
        </section>
        <div style="display:none;" class="logo-place">
        </div>
        <div class="display">
            <div class="container-content"></div>
        </div> 
    </div>
    
    <?php /*
    <div class="all-container">
        <h2 class="text-center">Bem vindo(a) ao Grupo Brasil Atuarial</h2>
        <h4 class="text-center">
            Escolha seu caminho:
        </h4>
        <div class="wrap">
            <div class="atuarial">
                <img src="<?= base_url("assets/img/grupo-logos/brasil-atuarial.png") ?>" />
                <div class="content">
                    <p>Nós somos uma empresa de desenvolvimento de Consultoria Atuarial para Entidades do 3 Setor e Insurtechs.</p>
                    <p>Atualmente somos a empresa que fornece gratuitamente a maior gama de conteúdos sobre o segmento Mutualista.</p>
                    <form action="<?= base_url("/atuarial")?>" method="get">
                        <button class="btn btn-primary">
                            Acessar Brasil Atuarial
                        </button>
                    </form>
                    
                </div>
            </div>
            <div class="dygo">
                <img src="<?= base_url("assets/img/grupo-logos/dygo.jpg") ?>" />
                <div class="content">
                <p>A DYGO é a primeira plataforma de Ensino a Distância do Brasil totalmente personalizada para Entidades Mútuas com cursos 
                    100% online e avaliação de desempenho do aprendizado após o treinamento, possibilitando dessa forma a 
                    expansão da atividade das Entidades a nível nacional com qualificação garantida.</p>
                    <a href="https://dygo.com.br" class="btn btn-primary">Acessar DYGO</a>
                </div>
            </div>
            <div class="beneficios">
                <img src="<?= base_url("assets/img/grupo-logos/brasil-beneficios.svg") ?>" />
                <div class="content">
                    <p>Nós somos uma empresa de fornecimento e gestão de Benefícios para Entidades do 3 Setor, Sindicatos, Cooperativas e 
                        Federações. Em uma relação 100% digital, entregamos as melhores soluções em Benefícios do Brasil.</p>
                    <a href="https://brasilbeneficios.club" class="btn btn-primary">Acessar Brasil Benefícios</a>
                </div>
            </div>
            <div class="plataformas">
                <img src="<?= base_url("assets/img/grupo-logos/brasil-plataformas.png") ?>" />
                <div class="content">
                <a href="https://brasilplataformas.com.br" class="btn btn-primary">Acessar Brasil Plataformas</a>
                </div>
            </div>
        </div>
    </div>
    */?>
    
    <script src="<?= base_url("./assets/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    <script>
        $(document).ready(function() {
            
                
            $("li .ch-item, .display").on("click", function() {
                
                if($(".display").hasClass("active")) {
                    let removeActive = new Promise((resolve) => {
                        $(".display").removeClass("show")

                        setTimeout(() => {
                            // console.log("teste")
                            $(".display").removeClass("active")    
                        $(".display .container-content").html("")
                            resolve("OK")
                        }, 600);
                    }).then((e) => {
                        console.log(e)
                        
                    }) 
                    
                } else {

                    var logoItem = $(this).closest("li").find(".ch-item")
                    var contentBox = $(this).closest("li").find(".content")
                    var logoPlace = $('.logo-place')
                    $(contentBox).clone().appendTo(".display .container-content");
                    $(logoPlace).clone().prependTo(".display .container-content")
                    $(logoItem).clone().appendTo(".display .container-content .logo-place")
                    
                    console.log(logoItem)
                    // $(logoItem).clone().appendTo($(lp))
                    // $(lp).clone().prependTo(".display .container-content");
                    // $(logoItem).clone().prependTo(".display .container-content .logo-place");
                    let addActive = new Promise((resolve) => {
                        $(".display").addClass("show")
                        $(".display .logo-place").fadeIn(500)
                        setTimeout(() => {
                            // console.log("teste")
                            $(".display .container-content").addClass("show")    
                            resolve("OK")
                        }, 600);
                    }).then((e) => {
                        console.log(e)
                        
                    }) 
                    $(".display").addClass("show")
                    $(".display").addClass("active")
                    // console.log(a)
                }

            })

        })
        
    </script>
    <!-- <script src="<?= base_url("assets/js/intro/script.js") ?>"></script> -->
</body>

</html>