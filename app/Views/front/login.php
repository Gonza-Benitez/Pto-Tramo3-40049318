<body>
  <br>
  <br>
  <br>
  <br>
  <div class="container mt-5 mb-5">
    <div class="card bg-dark text-light" style="max-width: 470px; margin:auto;">
      <div class= "card-header text-center">
        <h2>Ingresar</h2>
      </div>
      <form>
        <div class="card-body">
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
          </div>          
          <label for="pass" class="form-label">Contraseña</label>
          <div class="input-group">            
            <input name="pass" type="password" class="form-control" id="pass">
            <div class="input-group-append">
                <span class="input-group-text" style="cursor: pointer;" onclick="password_show_hide2();">&nbsp
                  <i class="fas fa-eye-slash" id="hide_eye2"></i>
                  <i class="fas fa-eye d-none" id="show_eye2"></i>&nbsp
                </span>
            </div>
          </div>
          <div class="row-fliud">
          <input type="submit" value="Iniciar Sesion" class="btn btn-dark btn-outline-light  me-3 mt-5">
          <p class="text-light text-center">
          ¿ No tienes cuenta ?
        </p>
         <a type="button" class="btn btn-dark btn-outline-light" href="<?php echo base_url('front/registro'); ?>">Crear Cuenta</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
</body>