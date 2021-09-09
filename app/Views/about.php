
<?= $this->extend('layouts/main/main') ?>

<?= $this->section('header') ?>
    <?= $this->include('layouts/main/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height3 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Conheça-nos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>Sobre</h4>
                        <p>
                            A <strong>Brasil Atuarial</strong> é uma empresa especializada na prestação de serviços de assessoria e de consultoria atuarial. Fundada em 2014, com o
                            propósito bem definido de oferecer soluções estratégicas e customizadas à necessidade de cada um dos nossos clientes, bem como objetiva
                            suprir as demandas atuariais nas áreas de seguros e de entidades de autogestão de planos contra riscos patrimoniais, oferecendo todo o
                            suporte técnico-atuarial e operacional necessários.
                        </p>
                        <!-- <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p> -->
                    </div>

                    <div class="about-details-cap mb-50">
                        <h4>Missão</h4>
                        <p>
                        Ofertar serviços em assessoria e consultoria atuarial que atendam as necessidades dos nossos clientes segundo princípios éticos e
profissionais.
                        </p>
                    </div>
                    <div class="about-details-cap mb-50">
                        <h4>Valores</h4>
                        <p>
                        Ética, sigilo, compromisso, responsabilidade e experiência.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->
    

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/main/parts/footer') ?>
<?= $this->endSection() ?>