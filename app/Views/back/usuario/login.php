<div class="container mt-5 mb-5">
    <div class="card bg-dark text-light" style="max-width: 470px; margin:auto;">
      <div class= "card-header text-center">
        <h2>Ingresar</h2>
      </div>

      <!-- Mensaje de Error -->

          <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
              <?= session()->getFlashdata('msg') ?>
            </div>
          <?php endif;?>

          <!-- Inicio del formulario de login -->

                <form method="post" action="<?php echo base_url('enviar-login') ?>">
                  <div class="card-body" media="(max-width:768px)">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com">
          </div>

                <div class="mb-3">    
          <label for="exampleFormControlInput1" class="form-label">Contraseña</label>           
            <input name="pass" type="password" class="form-control" id="pass" placeholder="contraseña">
                </div>

          <input type="submit" value="Iniciar Sesion" class="btn btn-dark btn-outline-light  me-3 mt-5">
          <p class="text-light text-center">
          ¿ No tienes cuenta ?
          <a type="button" class="text-light" href="<?php echo base_url('registro'); ?>">Crear Cuenta</a>
        </p>
          </div>
      </form>
    </div>
  </div>