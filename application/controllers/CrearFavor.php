<?php
class CrearFavor extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('usuarioModel');
        $this->load->model('favorModel');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            // traer favores de bd
            $cons         = $this->favorModel->buscarFavores();
            $favoresBD    = $cons->result();
            $favores      = json_decode(json_encode($favoresBD), true);
            $query        = $this->favorModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);

            $query        = $this->usuarioModel->obtenerUsuarios();
            $usuarios   = json_decode(json_encode($query->result()), true);

            $data         = array(
                'usuarios' => $usuarios,
                'favores'     => $favores,
                'categorias' => $categorias,
                'usuario'   => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function crear()
    {
        if ($this->session->userdata('login')) {
            $query        = $this->favorModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);
            $dataCat      = array('datos' => $categorias);
            $todo         = array(
                'usuario'   => $this->session->get_userdata(),
                'categoria' => $dataCat,
            );
            $this->twig->display('formfavor', $todo);

        } else {
            $this->index();
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

        $query   = $this->usuarioModel->buscarUsuario($user);
        $usuario = $query->result();

        $mandar = array('titulo' => $titulo,
            'ciudad'                 => $ciudad,
            'provincia'              => $provincia,
            'fec_lim'                => $fecha,
            'descripcion'            => $descripcion,
            'id_usuario'             => $usuario[0]->id_usuario);
        $this->usuarioModel->agregarFavor($mandar);

        $this->usuarioModel->agregarFC($categoria);

        $this->twig->display('favorAgregado');
    }
}
