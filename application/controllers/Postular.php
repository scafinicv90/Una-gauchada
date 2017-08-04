<?php
class Postular extends CI_Controller
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
        $this->load->model('postulacionModel');
    }

    public function index($id_favor=null)/*anda*/
    {
        if ($this->session->userdata('login')) {
            $cons    = $this->favorModel->obtenerFavor($id_favor);
            $favor     = $cons->result();
            $data = array(
                'favor' => $favor,
                'usuario' => $this->session->userdata());
            $this->twig->display('postular', $data);
        } else {
            $this->twig->display('index');
        }

	}
    public function agregar()
    {
        $id=$this->usuarioModel->buscarUsuario($this->input->post('id_usuario'));
        $idU=$id->result();
        $postulacion= array(
                'usuarios_id_usuario'   => $idU[0]->id_usuario,
                'favor_id_favor'    => $this->input->post('id_favor'),
                'descripcion' => $this->input->post('descripcion'));
        $this->postulacionModel->agregarPostulacion($postulacion);
        //refactoring esto
        $id=$this->input->post('id_favor');
        $comentarios = $this->favorModel->obtenerComentarios($id);
            if ($comentarios != false) {
                $comentarios = $comentarios->result();
            }
            $respuestas       = $this->favorModel->obtenerRespuestas($id);
            if ($respuestas!=false) {
                $respuestas =$respuestas->result();
            }
            $cons    = $this->favorModel->obtenerFavorUsuario($id);
            $favor     = $cons->result();
            $resul=$this->favorModel->obtenerImagenesId($id);
            $imagenes=$resul->result();
            $postulado=$this->postulacionModel->obtenerPostulacion($idU[0]->id_usuario,$id);
            if ($postulado != false) {
                $postulado=$postulado->result();
            }
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'postulacion'=> 'Postulado con exito',
                'postulado' => $postulado,
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
    }
    public function cancelar($idF)
    {
        //usuario para el favor postulado
        $id=$this->usuarioModel->buscarUsuario($this->session->userdata('email'));
        $id=$id->result();
        $id=$id[0]->id_usuario;
        //  obtengo el usuario
        // var_dump($id);var_dump($idF);
        $this->postulacionModel->eliminarPostulacion($idF,$id);
        //refactoring esto
        $comentarios = $this->favorModel->obtenerComentarios($idF);
            if ($comentarios != false) {
                $comentarios = $comentarios->result();
            }
            $respuestas       = $this->favorModel->obtenerRespuestas($idF);
            if ($respuestas!=false) {
                $respuestas =$respuestas->result();
            }
            $cons    = $this->favorModel->obtenerFavorUsuario($idF);
            $favor     = $cons->result();
            $resul=$this->favorModel->obtenerImagenesId($idF);
            $imagenes=$resul->result();
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'postulacion'=> 'Postulacion cancelada con exito',
                'postulado' => false,
                'cancelado' => true,
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
    }
    public function obtenerIDUsuario()
    {
        $id=$this->usuarioModel->buscarUsuario($this->session->userdata('email'));
        $id=$id->result();
        $id=$id[0]->id_usuario;
        return $id ;
    }
    public function verPostulaciones()
    {
        $id= $this->obtenerIDUsuario();
        $query=$this->postulacionModel->obtenerPostulaciones($id);
        if ($query != false) {
            $query=$query->result();
        }
        $data = array(
                'favores' => $query,
                'usuario' => $this->session->userdata());
        $this->twig->display('verMisPostulaciones', $data);
    }

    public function verPostulantes($id_favor) {
        $query = $this->postulacionModel->obtenerPostulantes($id_favor);
        if($query != false) {
            $query = $query->result();
        }
        $data = array(
            'postulantes' => $query,
            'usuario' => $this->session->userdata());
        $this->twig->display('verPostulantes', $data);
    }

    public function rechazarPostulante() {
        $id_usuario = $this->input->get('id');
        $id_favor = $this->input->get('idFavor');
        $this->postulacionModel->cancelarPostulacion($id_favor, $id_usuario);
        $query = $this->postulacionModel->obtenerPostulantes($id_favor);
        if($query != false) {
            $query = $query->result();
        }
        $data = array(
            'postulantes' => $query,
            'usuario' => $this->session->userdata());
        $this->twig->display('verPostulantes', $data);
    }


    public function calificarU()
    {
        if ($this->session->userdata('login')) {
            $favor = $this->favorModel->obtenerFavor($this->input->post('favor_id'));
            $favor =$favor->result();
            $data = array(
                'titulo' => $favor[0]->titulo,
                'favor_id' => $this->input->post('favor_id'),
                'id_usuario' => $this->input->post('id_usuario'),
                'usuario' => $this->session->userdata());
            $this->twig->display('calificarFormularioU', $data);
            return 0;
        } else {
            $this->twig->display('index');
        }
    }

    public function calificarD()
    {
        if ($this->session->userdata('login')) {
            $favor = $this->favorModel->obtenerFavor($this->input->post('favor_id'));
            $favor =$favor->result();
            $data = array(
                'titulo' => $favor[0]->titulo,
                'favor_id' => $this->input->post('favor_id'),
                'id_usuario' => $this->input->post('id_usuario'),
                'usuario' => $this->session->userdata());
            $this->twig->display('calificarFormularioD', $data);
            return 0;
        } else {
            $this->twig->display('index');
        }
    }


    public function calificarUsuario()
    {
        if ($this->session->userdata('login')) {

            $puntaje = $this->input->post('puntaje');
            $descripcion = $this->input->post('descripcion');
            $favor_id = $this->input->post('favor_id');
            $id_usuario = $this->input->post('id_usuario');
            $id_dueño = $this->input->post('dueño');

            $id=$this->usuarioModel->buscarUsuario($id_dueño);
            $id=$id->result();
            $id_dueño=$id[0]->id_usuario;

            if ($puntaje == "Selecciona un puntaje" & $descripcion == "") {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorPuntaje' => true,
                    'errorDescripcion' => true,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioU', $data);
                return 0;
            }elseif ($puntaje == "Selecciona un puntaje" ) {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorPuntaje' => true,
                    'descripcion' => $descripcion,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioU', $data);
                return 0;
            }elseif ($descripcion == "") {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorDescripcion' => true,
                    'puntaje' => $puntaje,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioU', $data);
                return 0;
            }else
            {
                $calificacion = array(
                                'comentario' => $descripcion,
                                'puntuacion' => $puntaje,
                                'usuarios_id_usuario' => $id_dueño,
                                'calificacion_hacia_usuario' => $id_usuario,
                                'id_favor' => $favor_id
                                 );
                $this->postulacionModel->crearCalificacion($calificacion);
                if ($puntaje == '1' ) {
                    $this->postulacionModel->actualizarReputacionMas($id_usuario);
                }elseif ( $puntaje == '-2') {
                    $this->postulacionModel->actualizarReputacionMenos($id_usuario);
                }

                $this->postulacionModel->confirmarCalificacionU($favor_id,$id_usuario);

                    $email=$this->session->userdata('email');
                    $usuario=$this->usuarioModel->buscarUsuario($email);
                    $data=array(
                            'calificacion' => true,
                            'usuarioPerfil' => $usuario->result(),
                            'usuario' => $this->session->userdata());
                    $this->twig->display('verPerfil', $data);
            }



        }else {
            $this->twig->display('index');
        }
    }

    public function calificarDuenio()
    {
        if ($this->session->userdata('login')) {

            $puntaje = $this->input->post('puntaje');
            $descripcion = $this->input->post('descripcion');
            $favor_id = $this->input->post('favor_id');
            $id_usuario = $this->input->post('id_usuario');
            $id_dueño = $this->obtenerIDUsuario();

            if ($puntaje == "Selecciona un puntaje" & $descripcion == "") {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorPuntaje' => true,
                    'errorDescripcion' => true,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioD', $data);
                return 0;
            }elseif ($puntaje == "Selecciona un puntaje" ) {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorPuntaje' => true,
                    'descripcion' => $descripcion,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioD', $data);
                return 0;
            }elseif ($descripcion == "") {
                $favor = $this->favorModel->obtenerFavor($favor_id);
                $favor =$favor->result();
                $data = array(
                    'errorDescripcion' => true,
                    'puntaje' => $puntaje,
                    'titulo' => $favor[0]->titulo,
                    'favor_id' =>$favor_id,
                    'id_usuario' => $id_usuario ,
                    'usuario' => $this->session->userdata());
                $this->twig->display('calificarFormularioD', $data);
                return 0;
            }else
            {
                $calificacion = array(
                                'comentario' => $descripcion,
                                'puntuacion' => $puntaje,
                                'usuarios_id_usuario' => $id_dueño,
                                'calificacion_hacia_usuario' => $id_usuario,
                                'id_favor' => $favor_id
                                 );
                $this->postulacionModel->crearCalificacion($calificacion);
                if ($puntaje == '1' ) {
                    $this->postulacionModel->actualizarReputacionMas($id_usuario);
                }elseif ( $puntaje == '-2') {
                    $this->postulacionModel->actualizarReputacionMenos($id_usuario);
                }
                $this->postulacionModel->confirmarCalificacionD($favor_id,$id_dueño);

                    $email=$this->session->userdata('email');
                    $usuario=$this->usuarioModel->buscarUsuario($email);
                    $data=array(
                            'calificacion' => true,
                            'usuarioPerfil' => $usuario->result(),
                            'usuario' => $this->session->userdata());
                    $this->twig->display('verPerfil', $data);
            }



        }else {
            $this->twig->display('index');
        }
    }

    public function aceptarPostulante() {
        $id_usuario = $this->input->get('id_usuario');
        $id_favor = $this->input->get('id_favor');
        $this->postulacionModel->confirmarPostulacion($id_favor, $id_usuario);
        $postulantes = $this->postulacionModel->obtenerPostulantes($id_favor);
        if($postulantes != false) {
            $postulantes = $postulantes->result();
            for($i = 0; $i < count($postulantes);  $i++) {
                if($postulantes[$i]->usuarios_id_usuario != $id_usuario) {
                    $this->postulacionModel->cancelarPostulacion($id_favor, $postulantes[$i]->usuarios_id_usuario);
                }
            }
        }
        $postulantes = $this->postulacionModel->obtenerPostulantes($id_favor);
        $data = array(
            'postulantes' => $postulantes->result(),
            'usuario' => $this->session->userdata());
        $this->twig->display('verPostulantes', $data);
    }

}