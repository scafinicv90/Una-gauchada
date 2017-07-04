<?php

class Perfil extends CI_Controller {

        public function __construct()
        {
	       parent::__construct();
                $this->load->helper('form');
                $this->load->helper('html');
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->model('usuarioModel');
                $this->load->model('favorModel');
                $this->load->model('comprasModel');
	}

	public function verPerfil()
        {
                $email=$this->session->userdata('email');
                $usuario=$this->usuarioModel->buscarUsuario($email);
                $data=array(
                        'usuarioPerfil' => $usuario->result(),
                        'usuario' => $this->session->userdata());
		$this->twig->display('verPerfil', $data);
	}

        public function verPerfilAjeno($id_usuario) {
                $usuario=$this->usuarioModel->buscarUsuarioId($id_usuario);
                $data=array(
                        'usuarioPerfil' => $usuario->result(),
                        'usuario' => $this->session->userdata());
                $this->twig->display('verPerfilAjeno', $data);

        }
}