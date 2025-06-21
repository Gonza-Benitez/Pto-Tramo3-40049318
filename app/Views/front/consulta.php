<div class="container mt-5">
<section class="container-flex">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="custom-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('front/principal')?>">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consulta</li>
        </ol>
    </nav>

<!--Preguntas frecuentes-->
<div class="row justify-content-right">
<div class="col-lg-6 col-sm-12">
  <h3>Preguntas frecuentes<h3>
<div class="accordion accordion-flush" id="accordionFlushExample">
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      ¿Como realizo un pedidio?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Solo tenés que seleccionar todos los productos que deseas adquirir. 
        Seguidamente, en el carrito de compras, para conocer el costo del envío colocás tu código postal en el recuadro correspondiente, elegís la mensajería de tu preferencia y debajo seleccionas la forma de pago. 
        Luego hacés clic en el botón COMPRAR y podés acceder como cliente (si ya tenés cuenta en TuFutbol) o crear un cliente nuevo. 
        Por último, completás los pasos brindados por el asistente, hasta confirmar la compra.
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      ¿Que medios de pagos aceptan?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">En Tabaqueria Ctes aceptamos una amplia variedad de métodos de pago, 
        incluyendo tarjetas de crédito y débito (Visa, MasterCard, American Express), transferencias 
        bancarias y pagos en efectivo.
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      ¿El precio que figura es el precio final?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Todos los precios en la web incluyen el IVA, y se encuentran expresados en pesos argentinos.
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
      ¿Ofrecen servicio de envios?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Tabaqueria Ctes, por el momento consta con servicio de envio dentro de la provincia.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
      ¿Tiene mas sucursales dentro del pais?
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Lamentablemente, ofrecemos un servicio exclusivo en la provincia de Corrientes-Capital .</div>
    </div>
  </div>
</div>
</div>


  <?php $validation = \Config\Services::validation(); ?>
  <div class="col-lg-6 col-sm-12">
    <div class="card bg-dark text-light" style="max-width: 600px; margin: 70px;">
      <form action="<?= base_url('Subir-Consulta'); ?>" method="post">
        <?php if (session()->getFlashdata('msg')) { ?>
          <div class="alert alert-warning collapse show" id="collapseExample2">
            <?= session()->getFlashdata('msg');?>
            <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2"><i class="fa-solid fa-xmark fa-xl" style="position: absolute; right: 15px; top: 27; color: black;"></i></a>
          </div>
        <?php } ?>
        <div class="card-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            <?php if($validation->getError('email')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email');?>
              </div>
            <?php }?>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" required>
            <?php if($validation->getError('nombre')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre');?>
              </div>
            <?php }?>
          </div>
          <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            <?php if($validation->getError('mensaje')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('mensaje');?>
              </div>
            <?php }?>
          </div>
          <button type="submit" class="btn btn-light me-3">Enviar</button>
          <button type="reset" class="btn btn-light">Limpiar</button>
        </div>
      </form>
    </div>
  </div>
            </div>
            </div>
            <br>
            <br>
            </section>