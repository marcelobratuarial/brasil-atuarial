
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
                            <h2>Para Entidades do 3º Setor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- ================ contact section start ================= -->
    
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12">
                    <h2 class="contact-title">Fale conosco</h2>
                </div> -->
                
                <div class="col-lg-6">
                    <div style="padding: 0px 50px 50px 50px;">
                        <h3>RATEIO: APURAÇÃO E IMPLEMENTAÇÃO</h3>
                        <p style="text-align: justify">Apuração refinada afim de identificar a metodologia de
                        rateio aderente às características da base através de testes
                        de adequação, pesquisa de mercado e simulações do
                        modelo. Após definida a metodologia, a Brasil Atuarial
                        oferece todo o suporte técnico e operacional na
                        implementação do rateio e acompanhamento mensal.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="padding: 0px 50px 50px 50px;">
                        <h3>RATEIO: APURAÇÃO E IMPLEMENTAÇÃO</h3>
                        <p style="text-align: justify">Apuração refinada afim de identificar a metodologia de
                        rateio aderente às características da base através de testes
                        de adequação, pesquisa de mercado e simulações do
                        modelo. Após definida a metodologia, a Brasil Atuarial
                        oferece todo o suporte técnico e operacional na
                        implementação do rateio e acompanhamento mensal.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Rua Batista Santiago, 81</h3>
                            <p>Liberdade - Belo Horizonte/MG</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fab fa-whatsapp"></i></span>
                        <div class="media-body">
                            <h3><a href="https://wa.me/3125108536?text=Ol%C3%A1%2C%20como%20vai%3F" target="_blank">(31) 2510-8536</a></h3>
                            <p>Seg a Sex 8 às 18hs</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>contato@brasilatuarial.com.br</h3>
                            <p>Envie-nos uma consulta a qualquer momento!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/main/parts/footer') ?>
<?= $this->endSection() ?>