  <div class="container mt-2 mb-4"style="max-width: 500px; margin:auto;">
    <div class="card bg-dark text-light" >
      <div class= "card-header text-center">

        <h2>Crear Cuenta</h2>
        
      </div>
      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/enviar-form') ?>">
        <div class="card-body">
          <?php if (session()->getFlashdata('msg')) { ?>
            <div class="alert alert-warning collapse show" id="collapseExample2">
              <?= session()->getFlashdata('msg');?>
              <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2"><i class="fa-solid fa-xmark fa-xl" style="position: absolute; right: 15px; top: 27; color:black;"></i></a>
            </div>
          <?php } ?>

          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre">
            <?php if($validation->getError('nombre')) {?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
              </div>
            <?php }?>
          </div>

          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" id="apellido">
            <?php if($validation->getError('apellido')) {?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido'); ?>
              </div>
            <?php }?>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            <?php if($validation->getError('email')) {?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
              </div>
            <?php }?>
          </div>
          
          <div class="mb-3">
            <label for="usuario" class="form-label">Nombre de Usuario</label>
            <input name="usuario" type="text" class="form-control" id="usuario">
            <?php if($validation->getError('usuario')) {?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('usuario'); ?>
              </div>
            <?php }?>
          </div>
          
          <label for="password" class="form-label">Contraseña</label>
          <div class="input-group">
            <input name="pass" type="password" class="form-control" id="password">
            <div class="input-group-append">
              <span class="input-group-text" style="cursor: pointer;" onclick="password_show_hide();">&nbsp
                <i class="fas fa-eye-slash" id="hide_eye"></i>
                <i class="fas fa-eye d-none" id="show_eye"></i>&nbsp
              </span>
            </div>
          </div>
          <?php if($validation->getError('pass')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass'); ?>
            </div>
          <?php }?>

          <label for="pass" class="form-label mt-3">Confirmar Contraseña</label>
          <div class="input-group">
            <input name="passconf" type="password" class="form-control" id="pass">
            <div class="input-group-append">
              <span class="input-group-text" style="cursor: pointer;" onclick="password_show_hide2();">&nbsp
                <i class="fas fa-eye-slash" id="hide_eye2"></i>
                <i class="fas fa-eye d-none" id="show_eye2"></i>&nbsp
              </span>
            </div>
          </div>
          <?php if($validation->getError('passconf')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('passconf'); ?>
            </div>
          <?php }?>
          <div class="d-flex justify-content-center mt-5">
          <input type="submit" value="Crear Cuenta" class="btn btn-dark btn-outline-light mt-3">
          </div>
        </div>
      </form>
    </div>
  </div>