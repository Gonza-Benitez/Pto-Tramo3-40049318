<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponsableInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Si el usuario no esta logueado
        if(!session()->get('logged_in'))
        {
            //Redirecciona a la página del login
            return redirect()->to('front/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //Do something here
    }
}