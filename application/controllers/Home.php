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

    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            /*  $this->session->userdata()); tiene la sesion y se la mando a la vista*/
            $this->twig->display('backend',$this->session->userdata()); 
            return 0;
        } else {

            $this->twig->display('index');
            return 0;
        }

    }

}
