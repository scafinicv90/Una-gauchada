<?php

/**
* 		
*/
class Registrar extends CI_Controller
{
	
	public function __construct() {

        parent::__construct();

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