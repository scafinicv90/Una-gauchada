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
    public function register()
    {
        $data = array(
            'usuario' => $this->session->userdata());
        $this->twig->display('registrar');
    }

    public function registrar()
    {
        $nombre   = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $fecha_nacimiento  = $this->input->post('fecha');
        $telefono = $this->input->post('telefono');
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->usuarioModel->buscarUsuario($email);
        if ($query) {
            $data['existe'] = 'Ya existe un usuario con ese email. Pruebe ingresando otro';
            $data['registrar'] = $this->input->post();
            $this->twig->display('registrar', $data);
        } else {
            $reg = array(
                'nombre'   => $nombre,
                'email'    => $email,
                'password' => $password,
                'telefono'      => $telefono,
                'fecha_nacimiento'  => $fecha_nacimiento,
                'apellido' => $apellido,
                'credito'  => 2,
                'tipo'     => 0);
            $this->usuarioModel->agregarUsuario($reg);
            $this->twig->display('envioMail');
        }
    }

}
