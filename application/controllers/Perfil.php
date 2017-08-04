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
                $this->twig->display('verRanking', $data);
        }
        public function obtenerRanking()
        {
                $ranking=$this->usuarioModel->obtenerRanking();
                $ranking=$ranking->result();

                $data=array(
                        'usuarios' => $ranking,
                        'usuario' => $this->session->userdata());
                $this->twig->display('verRanking', $data);
        }

        public function mostrarFormulario()
        {
                $email = $this->session->userdata('email');
                $usuario = $this->usuarioModel->buscarUsuario($email);
                $data = array(
                        'usuarioPerfil' => $usuario->result(),
                        'usuario' => $this->session->userdata());
                $this->twig->display('formularioPerfil', $data);
        }

        public function modificarPerfil($id_usuario)
        {
                $telefono = (int)$this->input->post('telefono');
                $email = $this->input->post('email');
                $email_actual = $this->input->post('email_actual');
                $telefono_actual = $this->input->post('telefono_actual');
                $nombre = $this->input->post('nombre');
                $apellido = $this->input->post('apellido');
                $fecha_nacimiento  = $this->input->post('fecha');
                $password = $this->input->post('password');
                $credito = $this->input->post('credito');
                $tipo = $this->input->post('tipo');
                $reputacion = $this->input->post('reputacion');
                        $user = $this->usuarioModel->buscarUsuarioId($id_usuario);
                        $user = $user->result();
                        $datos = array(
                                'nombre' => $nombre,
                                'email' => $email,
                                'password' => $password,
                                'telefono' => $telefono,
                                'apellido' => $apellido,
                                'fecha_nacimiento'  => $fecha_nacimiento,
                                'tipo' => $tipo,
                                'credito' => $credito,
                                'reputacion' => $reputacion);

                if ($telefono == "" and $email == "") {
                        $data = array (
                                'existe' => 'No modifico ningun campo.',
                                'usuarioPerfil' => $user,
                                'usuario' => $this->session->userdata());
                        $this->twig->display('formularioPerfil', $data);
                        return 0;
                }elseif ($telefono == "") {
                        if($email == $email_actual) {
                                $data = array (
                                        'existe' => 'Ya existe un usuario con ese email.',
                                        'usuarioPerfil' => $user,
                                        'usuario' => $this->session->userdata());
                                $this->twig->display('formularioPerfil', $data);
                                return 0;
                        } else {
                                $datos['telefono']= $telefono_actual;
                                $this->usuarioModel->modificarUsuario($id_usuario, $datos);
                                $user = $this->usuarioModel->buscarUsuarioId($id_usuario);
                                $user = $user->result();
                                $datos2 = array(
                                        'nombre'           => $user[0]->nombre,
                                        'apellido'         => $user[0]->apellido,
                                        'email'            => $user[0]->email,
                                        'telefono'         => $user[0]->telefono,
                                        'fecha_nacimiento' => $user[0]->fecha_nacimiento,
                                        'tipo'             => $user[0]->tipo,
                                        'login'            => true);
                                $this->session->set_userdata($datos2);
                                $datos = array(
                                        'usuarioPerfil' => $user,
                                        'usuario' => $this->session->userdata());
                                $this->twig->display('perfilModificado', $datos);
                                return 0;
                        }
                }elseif ($email == "") {
                        $datos['email']= $email_actual;
                        $this->usuarioModel->modificarUsuario($id_usuario, $datos);
                        $user = $this->usuarioModel->buscarUsuarioId($id_usuario);
                        $user = $user->result();
                        $datos2 = array(
                                        'nombre'           => $user[0]->nombre,
                                        'apellido'         => $user[0]->apellido,
                                        'email'            => $user[0]->email,
                                        'telefono'         => $user[0]->telefono,
                                        'fecha_nacimiento' => $user[0]->fecha_nacimiento,
                                        'tipo'             => $user[0]->tipo,
                                        'login'            => true);
                                $this->session->set_userdata($datos2);
                                $datos = array(
                                        'usuarioPerfil' => $user,
                                        'usuario' => $this->session->userdata());
                                $this->twig->display('perfilModificado', $datos);
                                return 0;
                }else{
                        $datos['telefono']= $telefono;
                        if($email == $email_actual) {
                                $this->usuarioModel->modificarUsuario($id_usuario, $datos);
                                $user = $this->usuarioModel->buscarUsuarioId($id_usuario);
                                $user = $user->result();

                                $data = array (
                                        'existe' => 'Telefono modificado. Pero Ya existe un usuario con ese email.',
                                        'usuarioPerfil' => $user,
                                        'usuario' => $this->session->userdata());
                                $this->twig->display('formularioPerfil', $data);
                                return 0;
                        } else {
                                $datos['email']= $email;
                                $this->usuarioModel->modificarUsuario($id_usuario, $datos);
                                $user = $this->usuarioModel->buscarUsuarioId($id_usuario);
                                $user = $user->result();
                                $datos2 = array(
                                        'nombre'           => $user[0]->nombre,
                                        'apellido'         => $user[0]->apellido,
                                        'email'            => $user[0]->email,
                                        'telefono'         => $user[0]->telefono,
                                        'fecha_nacimiento' => $user[0]->fecha_nacimiento,
                                        'tipo'             => $user[0]->tipo,
                                        'login'            => true);
                                $this->session->set_userdata($datos2);
                                $datos = array(
                                        'usuarioPerfil' => $user,
                                        'usuario' => $this->session->userdata());
                                $this->twig->display('perfilModificado', $datos);
                                return 0;
                        }

                }
        }

}