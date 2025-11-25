<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // if(is_null(session()->get('logged_in'))) {
        //     if($request->uri->getPath() !== 'Home') {
        //         return redirect()->to('Home');
        //     }
        // }

        // if ($this->isLoggedIn()) {
        //     $allowedRoute = ['/Home',];
        //     $currentRoute = $request->uri->getPath();

        //     if(!in_array($currentRoute, $allowedRoute)) {
        //         return redirect()->to('/Home');
        //     }
        // }

        if(!session()->get('logged_in')) {
            return redirect()->to('/Login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // if(session()->get('logged_in') == TRUE) {
        //     return redirect()->to('Dashboard');
        // }
    }
}