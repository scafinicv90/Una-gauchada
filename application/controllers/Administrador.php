<?php

class Administrador extends CI_Controller
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
        $this->load->model('administradorModel');
    }
    public function ir()
    {
        $data = array('usuario' => $this->session->userdata());
        $this->twig->display('categoriaCrear', $data);

    }
    public function crearCategoria()
    {
        $nombre = $this->input->post('nombre');
        $bool   = $this->favorModel->obtenerCategoria($nombre);
        if ($bool != false) {
            $errores['existe'] = 'Ya existe una categoria con ese nombre.';
            $data              = array(
                'errores' => $errores,
                'usuario' => $this->session->userdata());
            $this->twig->display('categoriaCrear', $data);

        } else {

            $this->administradorModel->agregarCategoria($nombre);

            $data = array('usuario' => $this->session->userdata());
            $this->twig->display('categoriaAgregada', $data);

        }
    }
    public function verCategorias()
    {
        $query        = $this->favorModel->buscarCategorias();
        $categoriasBD = $query->result();

        $data = array(
            'categorias' => $categoriasBD,
            'usuario'    => $this->session->userdata());

        $this->twig->display('verCategoria', $data);

    }
    public function modificarCategoria($idcat)
    {
        $query = $this->administradorModel->obtenerCategoriaID($idcat);
        $cat   = $query->result();

        $data = array(
            'categorias' => $cat,
            'usuario'    => $this->session->userdata());

        $this->twig->display('categoriaModificar', $data);

    }
    public function updateCategoria()
    {
        $nombre = $this->input->post('nombre');
        $idcat  = $this->input->post('idcat');
        $query  = $this->administradorModel->modificarCategoria($nombre, $idcat);

        $data = array(
            'usuario' => $this->session->userdata());

        $this->twig->display('categoriaModificada', $data);

    }
    public function eliminarCategoria($idcat)
    {
        $bool = $this->administradorModel->obtenerFC($idcat);

        $query = $this->administradorModel->obtenerCategoriaID($idcat);
        $cat   = $query->result();

        if ($bool != false) {
            $errores['existe'] = 'No se puede eliminar esta categoria porque tiene gauchadas relacionadas';
            $data              = array(
                'errores'    => $errores,
                'categorias' => $cat,
                'usuario'    => $this->session->userdata());
            $this->twig->display('categoriaEliminar', $data);

        } else {

            $data = array(
                'categorias' => $cat,
                'usuario'    => $this->session->userdata());
            $this->twig->display('categoriaEliminar', $data);
        }

    }
    public function deleteCategoria($idcat)
    {

        $query = $this->administradorModel->eliminarCategoria($idcat);

        $data = array(
            'usuario' => $this->session->userdata());

        $this->twig->display('categoriaEliminada', $data);

    }

}
