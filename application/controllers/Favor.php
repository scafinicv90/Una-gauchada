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
			$cons         = $this->favorModel->buscarFavores();
            $favoresBD    = $cons->result();
            $favores      = json_decode(json_encode($favoresBD), true);
            $query        = $this->favorModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);

            $query		  = $this->favorModel->obtenerFavor($id);
            $favor   = json_decode(json_encode($query->result()), true);

            $query		  = $this->favorModel->preObtenerComentarios($id,$favor[0]['id_usuario']);
            $id_comentarios   = json_decode(json_encode($query->result()), true);
            $query		  = $this->favorModel->obtenerComentarios($id_comentarios);
            $comentarios   = json_decode(json_encode($query->result()), true);
            // $query        = $this->usuarioModel->obtenerUsuarios();
            // $usuarios   = json_decode(json_encode($query->result()), true);

            $data         = array(
                
                'favor'     => $favor,
                'comentarios' => $comentarios);
		$this->twig->display('verFavor', $data);
	}
}