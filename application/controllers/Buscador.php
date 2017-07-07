<?php
class Buscador extends CI_Controller
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
        $this->load->model('buscadorModel');

    }
    public function index($datos=null)
    {
        if ($this->session->userdata('login')) {
            if ($datos == null ) {
                $busqueda=false;
                    $cons    = $this->favorModel->obtenerFavores();
                if ($cons == false ) {
                    $data = array(
                    'favores' => false,
                    'imagenes' => false,
                    'buscador' => true,
                    'usuario' => $this->session->userdata());
                    $this->twig->display('backend', $data);
                    return 0;
                }
                $favores=$cons->result();
                foreach ($favores as &$favor) {
                    $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                    $imagenes[$favor->id_favor]=$resul->result();
                    $res =get_object_vars($favor);
                    $res["postulantes"] = $this->favorModel->obtenerPostulantes($favor->id_favor);
                    $favor=$res;
                    }
                $query        = $this->favorModel->buscarCategorias();
                $categoriasBD = $query->result();
                $query = $this->favorModel->obtenerCiudades();
                $ciudades = $query->result();
                $data = array(
                    'favores' => $favores,
                    'categorias' => $categoriasBD,
                    'buscador' => $busqueda,
                    'ciudades' => $ciudades,
                    'imagenes' => $imagenes,
                    'usuario' => $this->session->userdata());
                $this->twig->display('backend', $data);
                return 0;
            }
        } else {

            $this->twig->display('index');
            return 0;
        }
    }
    public function magia($data)
    {
        if ($data['datos'] != false) {
                $favores=$data['datos']->result();
                foreach ($favores as &$favor) {
                    $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                    $imagenes[$favor->id_favor]=$resul->result();
                    $res =get_object_vars($favor);
                    $res["postulantes"] = $this->favorModel->obtenerPostulantes($favor->id_favor);
                    $favor=$res;
                    }
            }else {$favores=false;$imagenes=false;}

            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $query = $this->favorModel->obtenerCiudades();
            $ciudades = $query->result();
            $data = array(
            'favores' => $favores,
            'categorias' => $categoriasBD,
            'ciudades' => $ciudades,
            'imagenes' => $imagenes,
            'buscador' => true,
            'tituloB' => $data['titulo'],
            'categoriaB' => $data['categoria'],
            'ciudadB' => $data['ciudad'],
            'usuario' => $this->session->userdata());
            $this->twig->display('buscador', $data);
            return 0;
    }
    public function busqueda()
    {
        $id_usuario= $this->session->userdata('email');
        $id_usuario=$this->usuarioModel->buscarUsuario($id_usuario);
        $id_usuario=$id_usuario->result();
        $id_usuario=$id_usuario[0]->id_usuario;


        $titulo=$this->input->post('busqueda');
        $categoria=$this->input->post('categoria');
        $ciudad=$this->input->post('ciudad');
        if ($titulo=='' && $categoria=='Selecciona' && $ciudad=='Selecciona') {
            $this->index();
            return 0;
        }elseif ($titulo !=='' && $categoria!=='Selecciona' && $ciudad!=='Selecciona') {
            $data['datos']=$this->buscadorModel->obtenerPorTres($ciudad,$categoria,$titulo,$id_usuario);

            $data['ciudad'] =$ciudad;
            $data['categoria'] =$categoria;
            $data['titulo'] =$titulo;
            $this->magia($data);
            return 0;

        }elseif ($titulo !=='' && $categoria!=='Selecciona') {
            $data['datos']=$this->buscadorModel->obtenerPorTyCategoria($titulo,$categoria,$id_usuario);

            $data['ciudad'] =null;
            $data['categoria'] =$categoria;
            $data['titulo'] =$titulo;
            $this->magia($data);
            return 0;

        }elseif ($titulo !=='' && $ciudad!=='Selecciona') {
            $data['datos']=$this->buscadorModel->obtenerPorTyC($ciudad,$titulo,$id_usuario);
            $data['ciudad'] =$ciudad;
            $data['categoria'] =null;
            $data['titulo'] =$titulo;

             $this->magia($data);
             return 0;

        }elseif ($categoria!=='Selecciona' && $ciudad!=='Selecciona') {
            $data['datos']=$this->buscadorModel->obtenerPorCyC($categoria,$ciudad,$id_usuario);

            $data['ciudad'] =$ciudad;
            $data['categoria'] =$categoria;
            $data['titulo'] =null;
            $this->magia($data);
            return 0;

        }elseif ($titulo !=='') {
            $data['datos']=$this->buscadorModel->obtenerPorTitulo($titulo,$id_usuario);
            $data['titulo'] =$titulo;
            $data['categoria'] =null;
            $data['ciudad'] =null;
            $this->magia($data);
            return 0;
        }elseif ($categoria!=='Selecciona') {
            $categ=$this->favorModel->obtenerCategoria($categoria);
            $categ=$categ->result();
            $data['datos']=$this->buscadorModel->obtenerPorCategoria($categ[0]->id_categoria,$id_usuario);
            $data['categoria'] =$categoria;
            $data['titulo'] =null;
            $data['ciudad'] =null;
            $this->magia($data);
            return 0;
        }elseif ($ciudad!=='Selecciona') {
            $data['datos']=$this->buscadorModel->obtenerPorCiudad($ciudad,$id_usuario);
            $data['ciudad'] =$ciudad;
            $data['categoria'] =null;
            $data['titulo'] =null;

            $this->magia($data);
            return 0;
        }

    }
}