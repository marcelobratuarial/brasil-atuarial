
<?= $this->extend('layouts/manager/manager') ?>

<?= $this->section('header') ?>

    <?= $this->include('layouts/manager/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <!-- Content here -->
  <hr>
  <h2 class="text-center">Gerenciar conteúdo do Blog</h2>
  <hr>
</div>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/manager/parts/footer') ?>
<?= $this->endSection() ?>