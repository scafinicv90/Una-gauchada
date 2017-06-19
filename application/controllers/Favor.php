<?php

/**

 */
class Favor extends CI_Controller
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

    public function index()/*anda*/
    {
        if ($this->session->userdata('login')) {
            $cons    = $this->favorModel->obtenerFavores();
            $favores     = $cons->result();
            foreach ($favores as $favor) {
                // $query = $this->favorModel->obtenerFavorC($fav['id']);
                $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                $imagenes[$favor->id_favor]=$resul->result();
            }
            $data = array(
                'favores' => $favores,
                'imagenes' => $imagenes,
                'usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }

	}
    public function comentar()
    {
        $usuario1      = ($this->usuarioModel->buscarUsuario($this->input->post('usuario')));
        if ($usuario1 != false ) {
            $usuario2=json_decode(json_encode($usuario1->result(), true));
        $query =array(  'descripcion' => $this->input->post('comentario'),
                        'favor_id' => $this->input->post('favor_id'),
                        'usuario_id' =>$usuario2[0]->id_usuario );
        $this->favorModel->agregarComentario($query);
        }


        // $cons    = $this->favorModel->obtenerFavores();
        //     $favores     = $cons->result();
        //     foreach ($favores as $favor) {
        //         // $query = $this->favorModel->obtenerFavorC($fav['id']);
        //         $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
        //         $imagenes[$favor->id_favor]=$resul->result();
            
        //     }
        //     $data = array(
        //         'favores' => $favores,
        //         'imagenes' => $imagenes,
        //         'usuario' => $this->session->userdata());
        // $this->twig->display('backend',$data);
        $id=$this->input->post('favor_id');
        $comentarios = $this->favorModel->obtenerComentarios($id);
            if ($comentarios != false) {
                $comentarios = $comentarios->result();
            }
            $respuestas       = $this->favorModel->obtenerRespuestas($id);
            if ($respuestas!=false) {
                $respuestas =$respuestas->result();
            }
            $cons    = $this->favorModel->obtenerFavorUsuario($id);
            if ($cons == false ) {
                $this->index();
        return 0;
            }
            $favor     = $cons->result();
            $resul=$this->favorModel->obtenerImagenesId($id);
            $imagenes=$resul->result();
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'succes' => 'Se comento correctamente',
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
        return 0;
    }
    public function responder()
    {
        $usuario1      = ($this->usuarioModel->buscarUsuario($this->input->post('usuario')));
        $usuario2=json_decode(json_encode($usuario1->result(), true));
        $query=array(
            'respuesta' => $this->input->post('respuesta'),
            'usuarios_id' => $usuario2[0]->id_usuario,
            'id_comentario' => $this->input->post('comentario_id')
            );
        $this->favorModel->agregarRespuesta($query);
        $this->favorModel->updateComentario($this->input->post('comentario_id'));

        

        $cons    = $this->favorModel->obtenerFavores();
            $favores     = $cons->result();
            foreach ($favores as $favor) {
                // $query = $this->favorModel->obtenerFavorC($fav['id']);
                $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                $imagenes[$favor->id_favor]=$resul->result();
            
            }
            $data = array(
                'favores' => $favores,
                'imagenes' => $imagenes,
                'usuario' => $this->session->userdata());
        $this->twig->display('backend',$data);

    }

    public function ver($id=null) /*anda*/
    {
        if ( isset($id)){
                if ($this->session->userdata('login')) {

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
            $data = array(
                'favor' => $favor,
                'comentarios' => $comentarios,
                'respuestas' => $respuestas,
                'imagenes' => $imagenes,
                'usuario' => $this->session->userdata());
        $this->twig->display('verFavor', $data);
        }else
        {
        $this->twig->display('index');
        }
        }else
        {
            $this->index();
        }
    }
    public function verMisGauchadas()
    {

        if ($this->session->userdata('login')) {

            $user    = $this->session->userdata();
            $usuario = json_decode(json_encode($user), true);
            $cons    = $this->favorModel->obtenerMisFavores($usuario['email']);
            if ($cons != false) {
                $favores = $cons->result();
            foreach ($favores as $favor) {
                $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                $imagenes[$favor->id_favor]=$resul->result();
            
            }
            }else
            {
                $favores=false;
                $imagenes=false;

            }



            $data = array(
                'favores' => $favores,
                'imagenes' =>$imagenes,
                'usuario' => $this->session->userdata());
            $this->twig->display('verMisFavores', $data);
        } else {
            $this->twig->display('index');
        }

    }

    public function crear()/*anda*/
    {
        if ($this->session->userdata('login')) {
            $query=$this->usuarioModel->buscarUsuario($this->session->userdata('email'));
            $creditos=$query->result();
            if ($creditos[0]->credito == 0) {
                $cons    = $this->favorModel->obtenerFavores();
                $favores     = $cons->result();
                foreach ($favores as $favor) {
                    $resul=$this->favorModel->obtenerImagenesId($favor->id_favor);
                    $imagenes[$favor->id_favor]=$resul->result();
                }
                $data = array(
                    'favores' => $favores,
                    'imagenes' => $imagenes,
                    'creditoInsuficiente' => "No cuenta con el credito suficienete para crear una gauchada",
                    'usuario' => $this->session->userdata());
                $this->twig->display('backend', $data);
                return 0;
            }
            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $data         = array(
                'usuario'   => $this->session->get_userdata(),
                'categorias' => $categoriasBD,
            );
            $this->twig->display('formfavor', $data);
            return 0;

        } else {

            $this->index();
        }
    }

    public function procesarImagen()
    {

        $target_dir = "uploads/imgFavores/";
        if (empty($_FILES["fileToUpload"]["name"])) {

            $target_file = $target_dir . "logo.png";

            /*var_dump($target_file);*/
        } else {
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        }
        $uploadOk      = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        // var_dump($target_file);
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }
        // // Check file size
        // if ($_FILES["fileToUpload"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }
        // // Allow certain file formats
        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //     $uploadOk = 0;
        // }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {

            $target_file = $target_dir . "logo.png";

            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
        return $target_file;
    }
    public function validar($post)
    {
        $errores['validar']=true;
        if ((!isset($post['titulo'])) or ($post['titulo']) == null ) {
            $errores['titulo'] =' Titulo erroneo.';
            $errores['validar']=false;
        }else{$errores['titulo2'] = $post['titulo'];}
        if ((!isset($post['ciudad'])) or ($post['ciudad']) == null) {
            $errores['ciudad'] =' Ciudad erronea.';
            $errores['validar']=false;
        }else{$errores['ciudad2'] = $post['ciudad'];}
        if ((!isset($post['provincia'])) or ($post['provincia']) == null) {
            $errores['provincia'] =' Provincia erronea.';
            $errores['validar']=false;
        }else{$errores['provincia2'] = $post['provincia'];}
        if ((!isset($post['descripcion'])) or ($post['descripcion']) == null) {
            $errores['descripcion'] =' Descripcion con formato erroneo.';
            $errores['validar']=false;
        }else{$errores['descripcion2'] = $post['descripcion'];}
        if (!isset($post['categorias'])) {
            $errores['categorias'] =' Seleccione al menos una categoria';
            $errores['validar']=false;
        }
        if ((!isset($post['fecha'])) or ($post['fecha']) == null) {
            $errores['fecha'] =' Seleccione una fecha';
            $errores['validar']=false;
        }

        if ($post['fecha'] <= date("Y-m-d") ) {
            $errores['fecha'] ='Por favor indique una fecha mayor a la del dia actual.';
            $errores['validar']=false;
        }
        return $errores;
    }

    public function agregar()
    {
        $titulo      = $this->input->post('titulo');
        $ciudad      = $this->input->post('ciudad');
        $provincia   = $this->input->post('provincia');
        $descripcion = $this->input->post('descripcion');
        $fecha       = $this->input->post('fecha');
        $categorias   = $this->input->post('categorias');
        $user        = $this->input->post('email');
        $dirName     = $this->procesarImagen();

        $query   = $this->usuarioModel->buscarUsuario($user);
        // var_dump($query);die();
        $usuario = $query->result();
        $validar=$this->validar($this->input->post());
        if ($validar['validar']==false) {

            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $data         = array(
                'errores' => $validar,
                'usuario'   => $this->session->get_userdata(),
                'categorias' => $categoriasBD,
            );
            $this->twig->display('formfavor', $data);
            return 0;
        }
        if ($usuario[0]->credito == 0) {
            $error = 'Cantidad de creditos insuficiente';
            $query        = $this->favorModel->buscarCategorias();
            $categoriasBD = $query->result();
            $data         = array(
                'errores2' => $error,
                'usuario'   => $this->session->get_userdata(),
                'categorias' => $categoriasBD,
            );
            $this->twig->display('formfavor', $data);
        } else {
                $mandar = array('titulo' => $titulo,
                    'ciudad'                 => $ciudad,
                    'provincia'              => $provincia,
                    'fecha_limite'                => $fecha,
                    'descripcion'            => $descripcion,
                    'id_usuario'             => $usuario[0]->id_usuario);

                $id_favor = $this->favorModel->agregarFavor($mandar);
                $this->favorModel->agregarImagen($dirName, $id_favor);
                if ($categorias != '') {
                    foreach ($categorias as $categoria) {
                        $this->favorModel->agregarFC($categoria, $id_favor);
                    }
                }
                $this->favorModel->restarCredito($user);

                $data = array(
                    'usuario'    => $this->session->userdata());
                $this->twig->display('favorAgregado',$data);
                return 0;
        }

    }




}
