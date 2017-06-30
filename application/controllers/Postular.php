<?php
class Postular extends CI_Controller
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
        $this->load->model('postulacionModel');
    }

    public function index($id_favor=null)/*anda*/
    {
        if ($this->session->userdata('login')) {
            var_dump($id_favor);
            $cons    = $this->favorModel->obtenerFavor($id_favor);
            $favor     = $cons->result();
            $data = array(
                'favor' => $favor,
                'usuario' => $this->session->userdata());
            $this->twig->display('postular', $data);
        } else {
            $this->twig->display('index');
        }

	}
    public function agregar()
    {
        $id=$this->usuarioModel->buscarUsuario($this->input->post('id_usuario'));
        $idU=$id->result();
        $postulacion= array(
                'usuarios_id_usuario'   => $idU[0]->id_usuario,
                'favor_id_favor'    => $this->input->post('id_favor'),
                'descripcion' => $this->input->post('descripcion'));
        $this->postulacionModel->agregarPostulacion($postulacion);
        //refactoring esto
        $id=$this->input->post('id_favor');
        $comentarios = $this->favorModel->obtenerComentarios($id);
            if ($comentarios != false) {
                $comentarios = $comentarios->result();
            }
            $respuestas       = $this->favorModel->obtenerRespuestas($id);
            if ($respuestas!=false) {
                $respuestas =$respuestas->result();
            }
            $cons    = $this->favorModel->obtenerFavorUsuario($id);
            $favor     = $cons->result();
            $resul=$this->favorModel->obtenerImagenesId($id);
            $imagenes=$resul->result();
            $postulado=$this->postulacionModel->obtenerPostulacion($idU[0]->id_usuario,$id);
            if ($postulado != false) {
                $postulado=$postulado->result();
            }
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'postulacion'=> 'Postulado con exito',
                'postulado' => $postulado,
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
    }
    public function cancelar($idF)
    {
        //usuario para el favor postulado
        $id=$this->usuarioModel->buscarUsuario($this->session->userdata('email'));
        $id=$id->result();
        $id=$id[0]->id_usuario;
        //  obtengo el usuario
        var_dump($idF,$id);
        $this->postulacionModel->eliminarPostulacion($idF,$id);
        //refactoring esto
        $comentarios = $this->favorModel->obtenerComentarios($idF);
            if ($comentarios != false) {
                $comentarios = $comentarios->result();
            }
            $respuestas       = $this->favorModel->obtenerRespuestas($idF);
            if ($respuestas!=false) {
                $respuestas =$respuestas->result();
            }
            $cons    = $this->favorModel->obtenerFavorUsuario($idF);
            $favor     = $cons->result();
            $resul=$this->favorModel->obtenerImagenesId($idF);
            $imagenes=$resul->result();
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'postulacion'=> 'Postulacion cancelada con exito',
                'postulado' => false,
                'cancelado' => true,
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
    }
    public function obtenerIDUsuario()
    {
        $id=$this->usuarioModel->buscarUsuario($this->session->userdata('email'));
        $id=$id->result();
        $id=$id[0]->id_usuario;
        return $id ;
    }
    public function verPostulaciones()
    {
        $id= $this->obtenerIDUsuario();
        $query=$this->postulacionModel->obtenerPostulaciones($id);
        if ($query != false) {
            $query=$query->result();
        }
        var_dump($query);
        $data = array(
                'favores' => $query,
                'usuario' => $this->session->userdata());
        $this->twig->display('verMisPostulaciones', $data);
    }

    public function verPostulantes($id_favor) {
        $query = $this->postulacionModel->obtenerPostulantes($id_favor);
        if($query != false) {
            $query = $query->result();
        }
        $data = array(
            'postulantes' => $query,
            'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
    }
}