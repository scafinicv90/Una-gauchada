<?php
class Busqueda extends CI_Controller
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

    public function busqueda()
    {
        var_dump($this->input->post());
        var_dump("entre a buscar algo");die();
    }

}