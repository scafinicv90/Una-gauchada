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
        // var_dump('holapili');
        if ($this->session->userdata('login')) {
            $user  = $this->session->get_userdata();
            $query = $this->loginModel->buscarCategoria();
            $datos = $query->result();
            echo $query->num_rows();
            foreach ($datos as $key) {
                echo $key->nombre;
            }
            $data = array();
            for ($i = 0; $i < $query->num_rows(); $i++) {
                $data[$i] = array(
                    'idcat'     => $datos[$i]->id,
                    'nombrecat' => $datos[$i]->nombre);
                echo $data[$i]['idcat'];
                echo $data[$i]['nombrecat'];
            }
            $this->twig->display('formfavor', $data);
        } else {
            $this->twig->display('index');
        }
    }
}
