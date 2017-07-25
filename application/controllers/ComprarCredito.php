<?php

class ComprarCredito extends CI_Controller
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
        $this->load->model('comprasModel');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $cons    = $this->favorModel->obtenerFavores();
            $favores = $cons->result();
            foreach ($favores as $favor) {
                // $query = $this->favorModel->obtenerFavorC($fav['id']);
                $resul                      = $this->favorModel->obtenerImagenesId($favor->id_favor);
                $imagenes[$favor->id_favor] = $resul->result();

            }
            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $query        = $this->favorModel->obtenerCiudades();
            $ciudades     = $query->result();
            $data         = array(
                'favores'    => $favores,
                'categorias' => $categoriasBD,
                'ciudades'   => $ciudades,
                'imagenes'   => $imagenes,
                'usuario'    => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function validar()
    {

        $cant = 50 * (int) ($this->input->post('cantidad'));
        $data = array('usuario' => $this->session->userdata(),
            'validada'              => 'La tarjeta ha sido validada correctamente',
            'precioFinal'           => $cant);
        $this->twig->display('confirmarCompra', $data);
    }

    public function comprar()
    {
        // var_dump((int)($this->input->post('cantidad'))/50);

        $creditos = $this->usuarioModel->obtenerCreditos($this->input->post('usuario'));
        $int      = $creditos->result();
        $int2     = $int;
        $num      = (int) ($int2[0]->credito);
        // var_dump((int)($int2[0]->credito));die();
        $creditos = $num + ((int) ($this->input->post('cantidad')) / 50);
        $this->comprasModel->sumarCreditos($this->input->post('usuario'), $creditos);
        $this->index();
    }

    public function mostrarFormulario()
    {
        $data = array('usuario' => $this->session->userdata());
        $this->twig->display('formularioCompra', $data);
    }
    
}
