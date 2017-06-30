<?php
class Home extends CI_Controller
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

    public function index()
    {

        if ($this->session->userdata('login')) {
            /*  $this->session->userdata()); tiene la sesion y se la mando a la vista*/

            $cons = $this->favorModel->obtenerFavores();
            if ($cons == false) {
                $data = array(
                    'favores'  => false,
                    'imagenes' => false,
                    'buscador' => true,
                    'usuario'  => $this->session->userdata());

                $this->twig->display('backend', $data);
                return 0;
            }

            $favores = $cons->result();
            foreach ($favores as &$favor) {
                $resul                      = $this->favorModel->obtenerImagenesId($favor->id_favor);
                $imagenes[$favor->id_favor] = $resul->result();
                $res                        = get_object_vars($favor);
                $res["postulantes"]         = $this->favorModel->obtenerPostulantes($favor->id_favor);
                $favor                      = $res;
            }
            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $query        = $this->favorModel->obtenerCiudades();
            $ciudades     = $query->result();
            $data         = array(
                'favores'    => $favores,
                'categorias' => $categoriasBD,
                'ciudades'   => $ciudades,
                'buscador'   => true,
                'imagenes'   => $imagenes,
                'usuario'    => $this->session->userdata());
            $this->twig->display('backend', $data);
            return 0;
        } else {

            $this->twig->display('index');
            return 0;
        }

    }

}
