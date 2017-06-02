<?php
class CrearFavor extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('usuarioModel');
        $this->load->model('favorModel');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $cons    = $this->favorModel->buscarFavores();
            $favores = $cons->result();
            $data    = array(
                'favores' => $favores,
                'usuario' => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function crear()
    {
        if ($this->session->userdata('login')) {
            $query        = $this->favorModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);
            $dataCat      = array('datos' => $categorias);
            $todo         = array(
                'usuario'   => $this->session->get_userdata(),
                'categoria' => $dataCat,
            );
            $this->twig->display('formfavor', $todo);

        } else {

            $this->index();
        }
    }
    public function errores($error)
    {
        if ($this->session->userdata('login')) {
            // traer favores de bd
            $cons         = $this->favorModel->buscarFavores();
            $favoresBD    = $cons->result();
            $favores      = json_decode(json_encode($favoresBD), true);
            $query        = $this->favorModel->buscarCategoria();
            $categoriasBD = $query->result();
            $categorias   = json_decode(json_encode($categoriasBD), true);

            $query    = $this->usuarioModel->obtenerUsuarios();
            $usuarios = json_decode(json_encode($query->result()), true);

            $data = array(
                'usuarios'   => $usuarios,
                'favores'    => $favores,
                'categorias' => $categorias,
                'errores'    => $error,
                'usuario'    => $this->session->userdata());
            $this->twig->display('formfavor', $data);
        } else {
            $this->twig->display('index');
        }
    }

    public function procesarImagen()
    {
        $target_dir    = "uploads/imgFavores/";
        $target_file   = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk      = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        var_dump($target_file);
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
            /*
            $target_file = $target_dir . (logo . png);*/
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

    public function agregar()
    {
        $titulo      = $this->input->post('titulo');
        $ciudad      = $this->input->post('ciudad');
        $provincia   = $this->input->post('provincia');
        $descripcion = $this->input->post('descripcion');
        $fecha       = $this->input->post('fecha');
        $categoria   = $this->input->post('categoria');
        $user        = $this->input->post('email');
        $dirName     = $this->procesarImagen();

        $query   = $this->usuarioModel->buscarUsuario($user);
        $usuario = $query->result();

        if ($usuario[0]->credito == 0) {
            $error['creditos'] = 'Cantidad de creditos insuficiente';
            $this->errores($error);
        } else {
            $mandar = array('titulo' => $titulo,
                'ciudad'                 => $ciudad,
                'provincia'              => $provincia,
                'fec_lim'                => $fecha,
                'descripcion'            => $descripcion,
                'id_usuario'             => $usuario[0]->id_usuario);

/*
$key=$this->favorModel->obtenerKeyFavor();
$key=json_decode(json_encode($key->result()), true);
$KEY=$key[0]['AUTO_INCREMENT'];*/

            $id_favor = $this->favorModel->agregarFavor($mandar);
            $this->favorModel->agregarImagen($dirName, $usuario[0]->id_usuario, $id_favor);

            if ($categoria != '') {
                $this->favorModel->agregarFC($categoria, $id_favor);
            }
            $this->favorModel->restarCredito($usuario[0]->email);

            $this->twig->display('favorAgregado');
        }

    }
}
