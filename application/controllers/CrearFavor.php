<?php
class CrearFavor extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $config = [
            'debug' => true,
            'paths' => ['../views/', VIEWPATH],
            'cache' => '../cache',
        ];
        $this->load->library('twig');
        $this->twig->getTwig()->addExtension(new Twig_Extension_Debug());
        $this->twig->addGlobal('path', 'http://localhost/Una-gauchada/application/');

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginModel');
    }
    public function crear()
    {
        if ($this->session->userdata('login')) {
            $query        = $this->loginModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);
            $dataCat      = array('datos' => $categorias);
            $user         = $this->session->get_userdata();
            $todo         = array(
                'usuario'   => $user,
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
