<?php

/**
* 		
*/
class Registrar extends CI_Controller
{
	
	public function __construct() {

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

    public function mostrarFormulario() {
    	$this->twig->display('registrar');
    }
}