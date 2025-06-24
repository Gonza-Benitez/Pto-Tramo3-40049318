<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabaqueria Ctes</title>
    <title><?php echo($titulo);?></title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/misestilos.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/img/iconos/tabaquera.png');?>" rel="icon" >
</head>
<body>
 
<header>

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
      <nav class="navbar navbar-expand-md custom-bg-color">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url('front/principal')?>">
            <img src="<?php echo base_url('assets/img/iconos/tabaquera.png');?>" alt="Logo TabaqueriaCtes" width="45" height="45" class="d-inline-block align-text-top">
          </a>
          <a class="navbar-brand" href="<?php echo base_url('front/principal')?>">
            <h3>Tabaqueria Ctes</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

           <?php if(session()->perfil_id == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sn">
              <a href="">ADMIN: <?php echo session('usuario'); ?></a>
            </div>
                    <!-- Navabar para el administrador -->
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('front/quienes_somos')?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('front/consulta')?>">Consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('front/comercializacion')?>">Comercio</a>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('/logout')?>" tabindex="-1"
                      aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>
           </div>
                    <!-- Fin del Navbar del Admin -->


                     <?php elseif(session()->perfil_id == 2): ?>
            <div class="btn btn-secondary active btnUser btn-sn">
              <a href="">CLIENTE: <?php echo session('usuario'); ?></a>
            </div>
                    <!-- Navbar para los Usuarios logueados -->
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('front/contacto')?>">Contacto</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('front/consulta')?>">Consulta</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="nav-link" href="<?php echo base_url('front/pipas')?>">Pipas</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/tabacos')?>">Tabacos</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/encendedores')?>">Encendedores</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/filtros')?>">Filtros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/cortacigarros')?>">Corta Cigarros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/ceniceros')?>">Ceniceros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/papelillos')?>">Papelillos</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/abanos')?>">Abanos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('/logout')?>" tabindex="-1"
                      aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                  <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div>
                    <!-- Fin del navbar para los Usuarios --> 

 
                     <?php else: ?> 
                    <!-- Navbar para los Usuarios NO logueados --> 
                      <a class="navbar-brand" href="#"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('front/quienes_somos')?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('front/comercializacion')?>">Comercio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('front/contacto')?>">Contacto</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('front/consulta')?>">Consulta</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('front/terminos_condiciones')?>">Terminos y condiciones</a>
                </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="nav-link" href="<?php echo base_url('front/pipas')?>">Pipas</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/tabacos')?>">Tabacos</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/encendedores')?>">Encendedores</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/filtros')?>">Filtros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/cortacigarros')?>">Corta Cigarros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/ceniceros')?>">Ceniceros</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/papelillos')?>">Papelillos</a></li>
                          <li><a class="nav-link" href="<?php echo base_url('front/abanos')?>">Abanos</a></li>
                        </ul>
                    </li>
                    
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="<?php echo base_url('assets/img/iconos/usuario2.png')?>" alt="#" width="30" height="30" class="d-inline-block align-text-top">
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('front/login')?>">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('front/registro')?>">Registro</a>
                        </li>
                      </ul>
                    </div>        
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                  <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
                <?php endif;?>
              </div>
        </div>
      </nav>
</header>