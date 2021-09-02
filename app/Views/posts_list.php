
<?= $this->extend('layouts/manager/manager') ?>

<?= $this->section('header') ?>

    <?= $this->include('layouts/manager/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <!-- Content here -->
  <hr>
  <h2 class="text-center">Posts</h2>
  <!-- Button trigger modal -->
  <a class="btn btn-primary new-post" href="<?= base_url("dash/post/create") ?>">
    Novo post
  </a>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">IMG</th>
        <th scope="col">Post</th>
        <th scope="col">Categorias</th>
        <th scope="col">Status</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody class="regs">
      <?php foreach ($dash['posts'] as $k=>$value) : ?>
        <tr id="cat-<?= $value['id'] ?>">
          <!-- <th scope="row"><?php //$k+1 ?></th> -->
          <td class="">
            <?php 
              $destaque = (isset($value["image"]) && !empty($value["image"])) ? true : false; 
              if ($destaque) :
            ?>
            <img style="object-fit: cover; width: 100%; max-width: 140px; height: auto;"
            src="<?= base_url($value["image"]) ?>" alt="pic" />
            <?php else : ?>
            <img style="object-fit: cover; width: 100%; max-width: 140px; height: auto;"
            src="<?= base_url('/assets/img/no-image.jpg') ?>" alt="pic" />
            <?php endif; ?>
          </td>
          <td class=""><?= $value['post_title'] ?></td>
          <td class=""><?= $value['categorias'] ?></td>
          <td class="">
            <div class="custom-control custom-switch-md custom-switch">
              <input type="checkbox" <?= $value['status'] ? "checked" : "" ?> class="custom-control-input" data-id="<?= $value['id'] ?>" id="switch<?= $k+1 ?>" name="status">
              <label class="custom-control-label" for="switch<?= $k+1 ?>"><?= $value['status'] ? "Publicado" : "Não publicado" ?></label>
            </div>
          </td>
          <td>
            <a class="edit-cat" href="<?= base_url("/dash/post/".$value['id']."/edit") ?>" data-pid="<?= $value['id'] ?>">
              <i class="ti-pencil-alt"> </i>
            </a>
            <!-- <a href="" class="publish-post" data-cid="<?= $value['id'] ?>">
              <i class="ti-eye"> Publicar</i>
            </a> -->
          </td>
        </tr>
      <?php endforeach; ?>
      
      
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/manager/parts/footer') ?>
<?= $this->endSection() ?>