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
        if ($this->logueado()){
            $data=array('usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }


    public function crear()
    {
        if ($this->session->userdata('login')) {
            $query = $this->loginModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias = json_decode(json_encode($categoriasBD), true);
            $data= array('datos' => $categorias,
                        'usuario' => $this->session->userdata());
            $this->twig->display('formfavor', $data);
        } else {
            $this->twig->display('index');
        }
    }
}
