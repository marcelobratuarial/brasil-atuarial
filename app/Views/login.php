<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Brasil Atuarial</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h3>Autenticação</h3>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-info">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/LoginController/signin" method="post">
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Senha" class="form-control" >
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Entrar</button>
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>