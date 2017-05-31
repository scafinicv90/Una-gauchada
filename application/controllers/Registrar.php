<?php

class Registrar extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('usuarioModel');
        $this->load->model('favorModel');
    }
    public function paso()
    {

        $this->twig->display('formRegistrarse');
    }
    public function register()
    {
        $this->twig->display('registrar');
    }

function registra()
{
    $nombre   = $this->input->post('nombre');
    $email    = $this->input->post('email');
    $password = $this->input->post('password');
    $tel      = $this->input->post('tel');
    $apellido = $this->input->post('apellido');
    $fec_nac  = $this->input->post('fecha');

    $query = $this->usuarioModel->buscarUsuario($email);

    if ($query) {
        $error['existe'] = 'Ya existe un usuario con ese mail';
        $this->twig->display('formRegistrarse', $error);
    } else {
        $reg = array(
            'nombre'   => $nombre,
            'email'    => $email,
            'password' => $password,
            'tel'      => $tel,
            'fec_nac'  => $fec_nac,
            'apellido' => $apellido,
            'tipo'     => 0);
        $this->usuarioModel->agregarUsuario($reg);
        $this->twig->display('backend');
    }

}
}
