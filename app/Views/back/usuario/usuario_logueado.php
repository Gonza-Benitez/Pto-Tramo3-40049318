<div class="container mt-4">
    <div class="row justify-content-right">
    <div class="col-md-12">
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>
            <br><br>
            <?php if(session()->perfil_id == 1): ?>

            <!-- Inicio para el Administrador -->

<section class="container text-center">
  <br>
  <br>
  <div class="row">
        <div class="d-grid gap-2">
  <button class="btn btn-dark" type="button">Productos más Vendidos</button>
  <br>
  <br>
  <button class="btn btn-dark" type="button">Administrar Páginas</button>
  <br>
  <br>
  <button class="btn btn-dark" type="button">Cuentas Vinculadas</button>
  <br>
  <br>
  <button class="btn btn-dark" type="button">Registro de Actividad</button>
  <br>
  <br>
  <button class="btn btn-dark" type="button">Buzón de Consultas</button>
  <br>
  <br>
  <button class="btn btn-dark" type="button">Configuración</button>
</div>
  </div>
<br>
<br>
<br>
<br>
</section>

            <?php elseif(session()->perfil_id == 2): ?>

<!-- Inicio para los Clientes Logueados -->

<section class="container text-center mt-4">
    <div class="w-100 mx-auto text-center pt-2">
      <h2>¡BIENVENIDOS A TABAQUERIA CTES!</h2>
      <br> 
      <h4>Tabqueria Ctes es una tienda dedicada a la comercialización de diversos tipos de tabacos internacionales 
        y nacionales. Dentro de nuestra tienda también podrás encontrar, pipas, encendedores, corta cigarros, cigarros, 
        y más accesorios para su consumo personal.
      </h4>
    </div>
  </section>
  <br>
  <br>

  <!--Carrusel para pantallas lg a mayores-->
  <div id="carouselAutoplayingLG" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/imgPrincipal/cigarros.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/tabacos.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/filtros_2.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/papeles.jpg');?>" class="d-block w-100" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplayingLG" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplayingLG" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Carrusel para pantallas md a menores-->
  <div id="carouselAutoplayingMD" class="carousel slide d-md-block d-lg-none" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/imgPrincipal/cigarros.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/tabacos.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/filtros_2.jpg');?>" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/imgPrincipal/papeles.jpg');?>" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplayingMD" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplayingMD" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>


<!--Accesos directos a accesorios-->
<section class="container">
  <div class="container mt-4">
    <div class="row justify-content-right">
      <div class="col-md-12">
        <h2 class="text-center">Productos Destacados</h2>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/Pipas/porsche.jpg.webp');?>" class="card-img-top custom-card-img" alt="Pipas">
          <div class="card-body">
            <h5 class="card-title text-center">Pipas</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/Encendedores/zippo28432.jpg.webp');?>" class="card-img-top custom-card-img" alt="Encendedores">
          <div class="card-body">
            <h5 class="card-title text-center">Encendedores</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/CortaCigarros/corta-cigarro-doble-hoja-negro.jpg.webp');?>" class="card-img-top custom-card-img" alt="Corta Cigarros">
          <div class="card-body">
            <h5 class="card-title text-center">Corta Cigarros</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/Tabacos/argento-vainilla.jpg.webp');?>" class="card-img-top custom-card-img" alt="Tabacos">
          <div class="card-body">
            <h5 class="card-title text-center">Tabacos</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/Filtros/gizeh-slim.jpg.webp');?>" class="card-img-top custom-card-img" alt="Filtros">
          <div class="card-body">
            <h5 class="card-title text-center">Filtros</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 custom-card">
          <img src="<?php echo base_url('assets/img/Ceniceros/cenicerobulldogmetal.jpg.webp');?>" class="card-img-top custom-card-img" alt="Ceniceros">
          <div class="card-body">
            <h5 class="card-title text-center">Ceniceros</h5>
          </div>
        </div>
      </div>
    </div>
    <br>
<br>
</section>
                <?php endif;?>

            </div>
        </div>
    </div>