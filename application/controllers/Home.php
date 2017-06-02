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
            /* $favor   = array(
            'id',
            'titulo',
            'ciudad',
            'provincia',
            'fec_lim',
            'descripcion',
            'id_usuario',
            'id_imagen',
            'img',
            'id_favor',
            );
            $i = 0;*/
            foreach ($favores as $fav) {
                $query = $this->favorModel->obtenerFavorC($fav['id']);
                /*$favor[$i] = $query->result();
            $i++;*/

            }
            // var_dump('favores',$favoresBD);die();
            // $favores      = json_decode(json_encode($favoresBD), true); no por que se pierde la imagen
            // $query        = $this->favorModel->buscarCategoria();
            // $categoriasBD = $query->result();
            // $categorias   = json_decode(json_encode($categoriasBD), true);

            // $query    = $this->usuarioModel->obtenerUsuarios();
            // $usuarios = json_decode(json_encode($query->result()), true);

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
