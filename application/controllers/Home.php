<?php
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $config = [
        //     'debug' => true,
        //     'paths' => ['../views/', VIEWPATH],
        //     'cache' => '../cache',
        // ];
        // $this->load->library('twig');
        // $this->load->library('session');
        // $this->twig->getTwig()->addExtension(new Twig_Extension_Debug());
        // $this->twig->addGlobal('path', 'http://localhost/Una-gauchada/application/');
        // $this->twig->addGlobal('url', 'http://localhost/Una-gauchada/');
        // $this->twig->addGlobal('hay_usuario', $this->session->userdata('login'));

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginModel');

    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            /*  $this->session->userdata()); tiene la sesion y se la mando a la vista*/

            $cons         = $this->loginModel->buscarFavores();
            $favoresBD    = $cons->result();
            $favores      = json_decode(json_encode($favoresBD), true);
            $dataFavor    = array('datosFavor' => $favores);
            $query        = $this->loginModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);
            $dataCat      = array('datosCat' => $categorias);
            $todo         = array(
                'favor'     => $dataFavor,
                'categoria' => $dataCat,
                'usuario'   => $this->session->userdata());

            $this->twig->display('backend', $todo);
            return 0;
        } else {

            $this->twig->display('index');
            return 0;
        }

    }

}
