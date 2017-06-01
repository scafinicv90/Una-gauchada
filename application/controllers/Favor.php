<?php

/**

*/
class Favor extends CI_Controller
{

	public function __construct() {
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

	}

	public function ver($id)
	{
         if ($this->session->userdata('login')) {
            $query		  = $this->favorModel->obtenerFavor($id);
            $favor   	  = json_decode(json_encode($query->result()), true);

            $query        = $this->favorModel->obtenerFavorC($id);
            $favorC       = $query->result();

            $query		  = $this->favorModel->obtenerComentarios($id);
            if ($query!=false) {
                $query =$query->result();
            }
            // $id_comentarios   = json_decode(json_encode($query->result()), true);
            // var_dump($id_comentarios);die();
            // $query		  = $this->favorModel->obtenerComentarios($id_comentarios);

            // $comentarios   = json_decode(json_encode($query), true);
            // var_dump($comentarios);
            // $query        = $this->usuarioModel->obtenerUsuarios();
            // $usuarios   = json_decode(json_encode($query->result()), true);

            $data         = array(
                
                'favor'     => $favorC,
                'comentarios' => $query,
            	'usuario'    => $this->session->userdata());
		$this->twig->display('verFavor', $data);
	}else
    {
        $this->twig->display('index');
    }

    }
}