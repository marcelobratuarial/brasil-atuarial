
<?= $this->extend('layouts/manager/manager') ?>

<?= $this->section('header') ?>

    <?= $this->include('layouts/manager/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <!-- Content here -->
  <hr>
  <h2 class="text-center">Criar novo post</h2>
  
  
  <div class="row">
    <div class="col col-md-9 col-lg-9 col-xl-9">
      <input class="form-control form-control-lg" id="post-title" type="text" placeholder="Titulo do post">
      <hr />
      
      <div id="summernote"></div>
    </div>
    <div class="col col-md-3 col-lg-3 col-xl-3">
      <div style="position: relative">
        <button class="save-post btn btn-primary">Salvar</button>
        <hr />
        Categorias:
        <div class="category-box">
        <?php foreach ($dash['cats'] as $k=>$value) : ?>
          <div class="form-check categorias">
            <input class="form-check-input ck" name="categorias[]" type="checkbox" value="<?= $value["id"] ?>" id="defaultCheck<?= $k ?>">
            <label class="form-check-label" for="defaultCheck<?= $k ?>">
              <?= $value["category"] ?>
            </label>
          </div>
        <?php endforeach; ?>
        </div>
        <hr />
        Imagem de destaque:
        <div class="holder">
          <img style="object-fit: cover; width: 100%; max-width: 300px; height: auto;" id="imgPreview" src="<?= base_url('/assets/img/no-image.jpg') ?>" alt="pic" />
        </div>
        <div class="custom-file">
          <input type="file"  accepts="image/*" class="custom-file-input" id="imagem-destacada" lang="pt-BR">
          <label class="custom-file-label" for="imagem-destacada" data-browse="Procurar">Selecionar imagem</label>
        </div>
        <input id="post-id" type="hidden" value="">

      </div>
    </div>
  </div>
  <!-- <hr /> -->
  
  <!-- <div id="scrolling-container">
    <div id="editor-container">
    </div>
  </div> -->
  
  <!-- <button class="save-post btn btn-primary">Salvar</button> -->
</div>
<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel">Sucesso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Post criado com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/manager/parts/footer') ?>
<?= $this->endSection() ?>