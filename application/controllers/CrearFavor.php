<?php
class CrearFavor extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('loginModel');
    }

    public function index()
    {
        if ($this->logueado()) {
            $data = array('usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function crear()
    {
        if ($this->session->userdata('login')) {
            $query        = $this->loginModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);
            $dataCat      = array('datos' => $categorias);
            $todo         = array(
                'usuario'   => $this->session->get_userdata(),
                'categoria' => $dataCat,
            );
            $this->twig->display('formfavor', $todo);

        } else {
            $this->twig->display('indexLog');
        }
    }

    public function agregar()
    {
        $titulo      = $this->input->post('titulo');
        $ciudad      = $this->input->post('ciudad');
        $provincia   = $this->input->post('provincia');
        $descripcion = $this->input->post('descripcion');
        $fecha       = $this->input->post('fecha');
        $categoria   = $this->input->post('categoria');
        $user        = $this->input->post('email');

        $query   = $this->loginModel->buscarUsuario($user);
        $usuario = $query->result();

        $mandar = array('titulo' => $titulo,
            'ciudad'                 => $ciudad,
            'provincia'              => $provincia,
            'fec_lim'                => $fecha,
            'descripcion'            => $descripcion,
            'id_usuario'             => $usuario[0]->id_usuario);
        $this->loginModel->agregarFavor($mandar);

        $this->loginModel->agregarFC($categoria);

        $this->twig->display('indexLog');
    }
}
