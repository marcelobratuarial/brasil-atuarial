
<?= $this->extend('layouts/main/main') ?>

<?= $this->section('header') ?>
    <?= $this->include('layouts/main/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php //print_r($posts); ?>
    <!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                            foreach($posts as $p) :
                                // print_r($p);
                        ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?= (!empty($p["imagem"])) ? base_url($p["imagem"]) : base_url('/assets/img/no-image.jpg') ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?= $p['dia']; ?></h3>
                                    <p><?= monthBR($p['mes']) ?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url("blog/".slugify($p['post_title'])) ?>">
                                    <h2 class="blog-head" style="color: #2d2d2d;"><?= $p['post_title'] ?></h2>
                                </a>
                               
                                <ul class="blog-info-link">
                                    <?php foreach($p["categorias"] as $id => $categoria) : 
                                         ?>
                                    <li><a href="<?= base_url("blog/cat/".slugify($categoria)) ?> "> <?= $categoria ?></a></li>
                                    <?php endforeach; ?>
                                    <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                                </ul>
                            </div>
                        </article>
                        <?php endforeach; ?>
                        <?= $pager->links(false, 'default_bratuarial') ?>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                <?= $this->include('parts/blog/sidebar') ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/main/parts/footer') ?>
<?= $this->endSection() ?>