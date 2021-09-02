
<?= $this->extend('layouts/manager/manager') ?>

<?= $this->section('header') ?>

    <?= $this->include('layouts/manager/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <!-- Content here -->
  <h2 class="text-center">Editar post</h2>
  <div class="row">
    <div class="col col-md-9 col-lg-9 col-xl-9">
      <input class="form-control form-control-lg" value="<?= $dash['post'][0]["post_title"] ?>"  id="post-title" type="text" placeholder="Titulo do post">
      <div id="summernote">
        <?= $dash['post'][0]["post_content"] ?>
      </div>
    </div>
    <div class="col col-md-3 col-lg-3 col-xl-3">
      <div style="position: relative">
        <button class="save-post btn btn-primary">Atualizar</button>
        <hr />
        <div style="" class="custom-control custom-switch-md custom-switch">
          <input type="checkbox" <?= $dash['post'][0]['status'] ? "checked" : "" ?> class="custom-control-input" data-id="<?= $dash['post'][0]['id'] ?>" id="switch<?= $dash['post'][0]['id'] ?>" name="status">
          <label style="font-size: 1.4rem;" class="custom-control-label" for="switch<?= $dash['post'][0]['id'] ?>"><?= $dash['post'][0]['status'] ? "Publicado" : "Não publicado" ?></label>
        </div>
        <hr />
        Categorias:
        <div class="category-box">
        <?php foreach ($dash['cats'] as $k=>$value) : ?>
          <?php 
            $sc = explode(", ", $dash['post'][0]['sel_categorias']);
            $checked = (in_array($value["id"], $sc));
            // print_r($checked);
          ?>
          <div class="form-check categorias">
            <input <?= $checked ? 'checked' : '' ?> class="form-check-input ck" name="categorias[]" type="checkbox" value="<?= $value["id"] ?>" id="defaultCheck<?= $k ?>">
            <label class="form-check-label" for="defaultCheck<?= $k ?>">
              <?= $value["category"] ?>
            </label>
          </div>
          <?php endforeach; ?>
        </div>
        <hr />
        
        Imagem de destaque: 
        <div class="holder" style="position: relative">
            <?php 
              $destaque = (isset($dash['post'][0]["imagem"]) && !empty($dash['post'][0]["imagem"])) ? true : false; 
            ?>
            <button style="<?= ($destaque) ? 'display: block': 'display: none'  ?>" class="remove-image"><i class="ti-trash"></i></button>
            <img style="<?= ($destaque) ? 'display: none; ' : 'display: block; ' ?>object-fit: cover; width: 100%; max-width: 300px; height: auto;" id="noImageBox"
            src="<?= base_url('/assets/img/no-image.jpg') ?>" alt="pic" />
            <img style="<?= ($destaque) ? 'display: block; ' : 'display: none; '  ?>object-fit: cover; width: 100%; max-width: 300px; height: auto;" id="imgPreview"
            src="<?= ($destaque) ? base_url($dash['post'][0]["imagem"]) : '' ?>" alt="pic" />
        </div>
        <div class="custom-file" id="upload-box" style="<?= ($destaque) ? 'display: none': 'display: block'  ?>">
          <input type="file"  accepts="image/*" class="custom-file-input" id="imagem-destacada" lang="pt-BR">
          <label class="custom-file-label" for="imagem-destacada" data-browse="Procurar">Selecionar imagem</label>
        </div>
        <!-- <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLangHTML">
          <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Voeg je document toe</label>
        </div> -->
        <!-- <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div> -->
        <input id="post-id" type="hidden" value="<?= $dash['post'][0]["id"] ?>">
      </div>
    </div>
  </div>
  <hr>
  
  
  
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