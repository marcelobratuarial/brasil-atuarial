
<?= $this->extend('layouts/main/main') ?>

<?= $this->section('header') ?>
    <?= $this->include('layouts/main/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Universidade Corporativa</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- Dygo Details Start -->
    <div class="dygo-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="dygo-details-cap mb-50">
                        <h4>DYGO</h4>
                        <p>
                            A DYGO - Universidade corporativa nasceu de uma dor do segmento da Proteção Veicular,
                            uma dor das associações como um todo: Que é essa rotatividade de associado e de consultores. 
                            Nascemos de uma experiência do nosso fundador e CEO Gustavo Becker, 
                            dentro de uma das maiores entidades no segmento, a Lions.
                        </p>
                        <div style="text-align:center">
                            <img class="" src="<?= base_url('/assets/img/solucoes/logo-dygo.png') ?>" alt="">
                        </div>
                        <p>Depois de ajudar a Lions Proteção Veicular a atingir 80 mil associados, Gustavo, 
                            palestrante e treinador de vendas há 10 anos, se apaixonou pela Proteção Veicular 
                            justamente por ser um segmento que ajuda muitas pessoas que não podem fazer um seguro, 
                            seja pelos preços exorbitantes, seja por restrição no CPF ou por qualquer negativa das 
                            seguradoras, nós vimos a necessidade de profissionalizar o segmento com treinamentos, 
                            cursos e palestras totalmente voltados pra Proteção Veicular.
                        </p>
                        <p>
                            A proteção veicular (Socorro Mútuo) é mais que um segmento da economia. 
                            É uma contribuição Social para o Brasil, que gera mais de 200 mil empregos diretos, 
                            com mais de 2 milhões de usuários por todo o Brasil e já é uma realidade que veio pra ficar!
                        </p>
                        <p>
                            Portanto, a DYGO nasceu com a missão de contribuir para aumentar a qualidade de 
                            vida de todos os profissionais envolvidos no segmento da Proteção Veicular, do 
                            Socorro Mútuo! Essa é a nossa missão, através da capacitação dos colaboradores, 
                            ajudar as associações e cooperativas de proteção veicular a proteger 50% da frota 
                            circulante do páis assim como é nos Estados Unidos.
                        </p>
                    </div>

                    <!-- <div class="about-details-cap mb-50">
                        <h4>Our Vision</h4>
                        <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                        </p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->
    

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/main/parts/footer') ?>
<?= $this->endSection() ?>