<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMiddleware implements Luthier\MiddlewareInterface 
{
    public function run($args = '') 
    {
        $CI = &get_instance();
        $session = $CI->session->userdata();

        if (!isset($session) || $session['isLogin'] !== TRUE) {
            route_redirect('login', [], ['errors' => 'Silahkan login dahulu']);
        }
    }
}