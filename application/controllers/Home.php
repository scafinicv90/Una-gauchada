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

            $cons    = $this->favorModel->buscarFavores();
            $fav     = $cons->result();
            $favores = json_decode(json_encode($fav), true);
            foreach ($favores as $fav) {
                $query = $this->favorModel->obtenerFavorC($fav['id']);
            }
            $data = array(
                'favores' => $favores,
                'usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
            return 0;
        } else {

            $this->twig->display('index');
            return 0;
        }

    }

}
