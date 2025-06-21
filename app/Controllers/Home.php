<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/menu' ,$data);
        echo view('front/principal');
        echo view('front/footer');
    }
    public function ver()
    {
        $data['titulo']='ver';
        echo view('front/menu' ,$data);
        echo view('front/principal');
        echo view('front/footer');
    }
    public function somos()
    {
        $data['titulo']='somos';
        echo view('front/menu' ,$data);
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acerca_de()
    {
        $data['titulo']='acerca_de';
        echo view('front/menu' ,$data);
        echo view('front/contacto');
        echo view('front/footer');
    }
    public function comercio()
    {
        $data['titulo']='comercio';
        echo view('front/menu' ,$data);
        echo view('front/comercializacion');
        echo view('front/footer');
    }
    
    public function pipas()
    {
        $data['titulo']='pipas';
        echo view('front/menu' ,$data);
        echo view('front/pipas');
        echo view('front/footer');
    }
   
    public function terminos()
    {   
        $data['titulo']='terminos';
        echo view('front/menu' ,$data);
        echo view('front/terminos_condiciones');
        echo view('front/footer');
    }

    public function consulta()
    {
        $data['titulo']='consulta';
        echo view('front/menu' ,$data);
        echo view('front/consulta');
        echo view('front/footer');
    }

    public function tabacos()
    {
        $data['titulo']='tabacos';
        echo view('front/menu' ,$data);
        echo view('front/tabacos');
        echo view('front/footer');
    }

    public function filtros()
    {
        $data['titulo']='filtros';
        echo view('front/menu' ,$data);
        echo view('front/filtros');
        echo view('front/footer');
    }

    public function papelillos()
    {
        $data['titulo']='papelillos';
        echo view('front/menu' ,$data);
        echo view('front/papelillos');
        echo view('front/footer');
    }

    public function cigarros()
    {
        $data['titulo']='cigarros';
        echo view('front/menu' ,$data);
        echo view('front/cortacigarros');
        echo view('front/footer');
    }

    public function ceni()
    {
        $data['titulo']='ceni';
        echo view('front/menu' ,$data);
        echo view('front/ceniceros');
        echo view('front/footer');
    }

    public function encend()
    {
        $data['titulo']='encend';
        echo view('front/menu' ,$data);
        echo view('front/encendedores');
        echo view('front/footer');
    }

    public function abanos()
    {
        $data['titulo']='abanos';
        echo view('front/menu' ,$data);
        echo view('front/abanos');
        echo view('front/footer');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/menu' ,$data);
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/menu' ,$data);
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

}
