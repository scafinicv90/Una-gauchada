<?php

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
            $data=array('usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function mostrarFormulario() {
        $data=array('usuario' => $this->session->userdata());
    	$this->twig->display('formularioCompra',$data);
    }
}