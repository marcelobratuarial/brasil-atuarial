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
    <title>Grupo Brasil Atuarial</title>
     <style>
        li .ch-item {
            cursor: pointer;
        }
        .display.show {
            z-index: 10;
            opacity: 1;
        }
        .display.active {
            
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
            border: solid 1px #c2c2c2;
            padding: 30px;
            border-radius: 30px;
        }
        .display.active .container-content {
            opacity: 1;
            transition: all 1s ease;
            background: #fff;
            width: 500px;
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        
        .display.active .content {
            opacity: 1;
            transition: all 1s ease;
            background: #fff;
            text-align: center;
            margin-top: 50px;
        }
        .display .content {
            opacity: 0;
            /* display: none; */
            transition: all 1s ease;
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
        @media (max-width: 768px) {
            
            .display.active .container-content {
                width: 400px;
            }
            /* .wrap div > img, .display div > img {
                margin-top: 50px;
            } */
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
     </style>
</head>

<body>
<div class="container" style="position:absolute;">
		
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
                                    <p>CONSULTORIA <a href="#">ACESSAR SITE</a></p>
                                </div>	
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <img src="<?= base_url("assets/img/grupo-logos/brasil-atuarial.png") ?>" />
                        <p>Nós somos uma empresa de desenvolvimento de Consultoria Atuarial para Entidades do 3 Setor e Insurtechs.</p>
                        <p>Atualmente somos a empresa que fornece gratuitamente a maior gama de conteúdos sobre o segmento Mutualista.</p>
                        <form action="<?= base_url("/atuarial")?>" method="get">
                            <button class="btn btn-primary">
                                Acessar Brasil Atuarial
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
                                    <p>Universidade Corporativa <a href="#">ACESSAR SITE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <img src="<?= base_url("assets/img/grupo-logos/dygo.jpg") ?>" />
                        <p>A DYGO é a primeira plataforma de Ensino a Distância do Brasil totalmente personalizada para Entidades Mútuas com cursos 
                            100% online e avaliação de desempenho do aprendizado após o treinamento, possibilitando dessa forma a 
                            expansão da atividade das Entidades a nível nacional com qualificação garantida.</p>
                            <a href="https://dygo.com.br" class="btn btn-primary">Acessar DYGO</a>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-3">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                    <h3>BRASIL BENEFÍCIOS</h3>
                                    <p>CENTRAL DE BENEFÍCIOS <a href="#">ACESSAR SITE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <img src="<?= base_url("assets/img/grupo-logos/brasil-beneficios.svg") ?>" />
                        <p>Nós somos uma empresa de fornecimento e gestão de Benefícios para Entidades do 3 Setor, Sindicatos, Cooperativas e 
                            Federações. Em uma relação 100% digital, entregamos as melhores soluções em Benefícios do Brasil.</p>
                        <a href="https://brasilbeneficios.club" class="btn btn-primary">Acessar Brasil Benefícios</a>
                    </div>
                </li>
                
                <li>
                    <div class="ch-item ch-img-4">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"></div>
                                <div class="ch-info-back">
                                    <h3>BRASIL DIGITAL</h3>
                                    <p>AGÊNCIA DE MARKETING <a href="#">ACESSAR SITE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <img src="<?= base_url("assets/img/grupo-logos/agencia-brasil-digital.png") ?>" />
                        <p>Nós somos uma empresa de fornecimento e gestão de Benefícios para Entidades do 3 Setor, Sindicatos, Cooperativas e 
                            Federações. Em uma relação 100% digital, entregamos as melhores soluções em Benefícios do Brasil.</p>
                        <a href="https://agenciabrasildigital.com.br" class="btn btn-primary">Acessar Brasil Benefícios</a>
                    </div>
                </li>
                
            </ul>
            
        </section>
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
    <div class="display">
        <div class="container-content"></div>
    </div> 
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

                    var a = $(this).closest("li").find(".content")
                    console.log(a)
                    $(a).clone().appendTo(".display .container-content");
                    let removeActive = new Promise((resolve) => {
                        $(".display").addClass("show")

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
</body>

</html>