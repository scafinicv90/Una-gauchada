<?php

/**
* 
*/
class ComprarCredito extends CI_Controller
{

	public function __construct() {
		parent::__construct();

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginModel');
	}

	public function index() {
        if ($this->session->userdata('login')){
            $user = $this->session->get_userdata();
            $this->twig->display('indexLog', $user);
        } else {
            $this->twig->display('index');
        }
    }

    public function mostrarFormulario() {
    	$this->twig->display('formularioCompra');
    }
}