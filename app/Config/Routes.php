<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('front/principal',  'Home::ver');
$routes->get('front/quienes_somos', 'Home::somos');
$routes->get('front/contacto', 'Home::acerca_de');
$routes->get('front/consulta', 'Home::consulta');
$routes->get('front/comercializacion','Home::comercio');
$routes->get('front/terminos_condiciones','Home::terminos');
$routes->get('front/pipas', 'Home::pipas');
$routes->get('front/tabacos', 'Home::tabacos');
$routes->get('front/abanos', 'Home::abanos');
$routes->get('front/filtros', 'Home::filtros');
$routes->get('front/cortacigarros', 'Home::cigarros');
$routes->get('front/papelillos', 'Home::papelillos');
$routes->get('front/ceniceros', 'Home::ceni');
$routes->get('front/encendedores', 'Home::encend');
$routes->get('front/login', 'Home::login');
$routes->get('front/registro', 'Home::registro');

/*Rutas del Registro de Usuarios*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::fromValidation');
/*

/*Rutas del login*/
$routes->get('/login', 'login_controller');
$routes->post('/enviar-login', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
/*

//['filter' => 'auth']
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
