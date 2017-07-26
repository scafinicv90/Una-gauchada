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

        public function verPerfilAjeno($id_usuario)
        {
                $usuario=$this->usuarioModel->buscarUsuarioId($id_usuario);
                $data=array(
                        'usuarioPerfil' => $usuario->result(),
                        'usuario' => $this->session->userdata());
                $this->twig->display('verPerfilAjeno', $data);
        }

        public function mostrarFormulario()
        {
                $email = $this->session->userdata('email');
                $usuario = $this->usuarioModel->buscarUsuario($email);
                var_dump($usuario->result());
                $data = array(
                        'usuarioPerfil' => $usuario->result(),
                        'usuario' => $this->session->userdata());
                $this->twig->display('formularioPerfil', $data);
        }

        public function modificarPerfil()
        { 
                var_dump($this->input->post());die();
                $telefono = $this->input->post('telefono');
                $email = $this->input->post('email');
                $nombre = $this->input->post('nombre');
                $apellido = $this->input->post('apellido');
                $fecha_nacimiento  = $this->input->post('fecha');
                $password = $this->input->post('password');
                $credito = $this->input->post('credito');
                $tipo = $this->input->post('tipo');
                $id_usuario = $this->session->userdata('id_usuario');
                $usuario = $this->usuarioModel->buscarUsuario($email);
                if($usuario) {
                        $data['existe'] = 'Ya existe un usuario con ese email.';
                        $data['registrar'] = $this->input->post();
                        $this->twig->display('formularioPerfil', $data);
                } else {
                        $data = array(
                                'nombre' => $nombre,
                                'email' => $email,
                                'password' => $password,
                                'telefono' => $telefono,
                                'fecha_nacimiento'  => $fecha_nacimiento,
                                'apellido' => $apellido,
                                'credito' => $credito,
                                'tipo' => $tipo);
                        $this->usuarioModel->modificarUsuario($id_usuario, $data);
                        $user = $this->usuarioModel->buscarUsuario($email);
                        $datos = array(
                                'usuarioPerfil' => $user->result(),
                                'usuario' => $this->session->userdata());
                        $this->twig->display('perfilModificado', $datos);
                }
        }

}