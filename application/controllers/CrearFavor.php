<?php
class Login extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $config = [
            'debug' => true,
            'paths' => ['../views/', VIEWPATH],
            'cache' => '../cache',
        ];
        $this->load->library('twig');
        $this->twig->getTwig()->addExtension(new Twig_Extension_Debug());
        $this->twig->addGlobal('path', 'http://localhost/Una-gauchada/application/');

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginModel');
    }
    public function crear()
    {
        if ($this->session->userdata('login')) {
            $user = $this->session->get_userdata();
            $this->twig->display('formfavor');
        } else {
            $this->twig->display('index');
        }
    }
}
