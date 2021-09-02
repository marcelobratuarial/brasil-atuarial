
<?= $this->extend('layouts/manager/manager') ?>

<?= $this->section('header') ?>

    <?= $this->include('layouts/manager/parts/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
  <!-- Content here -->
  <hr>
  <h2 class="text-center">Categorias</h2>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary new-cat" data-toggle="modal" data-target="#exampleModal">
    Nova categoria
  </button>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Categoria</th>
        <th scope="col">Posts</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody class="regs">
      <?php foreach ($dash['cats'] as $k=>$value) : ?>
        <tr id="cat-<?= $value['id'] ?>">
          <!-- <th scope="row"><?php //$k+1 ?></th> -->
          <td class="cat-name"><?= $value['category'] ?></td>
          <td><?= $value['catCount'] ?></td>
          <td>
            <a class="edit-cat" data-toggle="modal" data-cid="<?= $value['id'] ?>" data-target="#exampleModal">
              <i class="ti-pencil-alt"> </i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
      
      
    </tbody>
  </table>
  
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control form-control-lg" id="category-name" type="text" placeholder="Nome da categoria">
        <input id="category-id" type="hidden" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary save-cat">Salvar</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
    <?= $this->include('layouts/manager/parts/footer') ?>
<?= $this->endSection() ?>