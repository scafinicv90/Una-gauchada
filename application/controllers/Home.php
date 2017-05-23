<?php
class Home extends CI_Controller
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
        $this->twig->addGlobal('hay_usuario', $this->session->userdata('login'));

    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $this->twig->display('indexLog');
            return 0;
        } else {
            $this->twig->display('index');

            return 0;
        }

    }
    public function backend()
    {
        $this->twig->display('indexLog');
        return 0;
    }

}
