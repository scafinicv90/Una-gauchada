<?php
class Login extends CI_Controller
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

    public function index()
    {

        if ($this->logueado()) {

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
                'usuario'    => $this->session->userdata());
            $this->twig->display('backend', $data);
        } else {
            $this->twig->display('index');
        }
    }
    public function logueado()
    {
        if ($this->session->userdata('login') == true) {
            return true;
        } else {
            return false;
        }
    }

    public function check()
    {

        if ($this->logueado()) {
            $this->index();
            return 0;

        } else {
            // Obtengo los datos ingresados en los inputs mediante el metodo post
            $entry = array(
                'email'    => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            /* limpiar datos de entrada */
            $data = $this->validar($entry);
            /**/

            if ($data['limpio'] == true) {
                /* Se realiza un llamado a una funcion del model para obtener la consulta,
                solo con el email es suficiente para conseguir los datos del usuario ya que
                este campo es unico y no puede repetirse */
                $query = $this->usuarioModel->buscarUsuario($entry['email']); // La consulta retorna un objeto de tipo query lo cual tiene sus propias funciones o metodos
                if ($query) {
                    /* Obtengo la tupla correspondiente al email del usuario en cuestion (como el email no puede repetirse, la consulta solo retorna una sola tupla) */
                    $usuario = $query->result(); // result() es una funcion del objeto query que devuelve un arreglo de tuplas (en este caso devuelve una sola tupla)
                    if ($usuario[0]->password == $entry['password']) {
                        // $usuario[0] accede a la primera tupla del arreglo y ->password accede al valor que se encuentra en el campo password
                        $user = array(
                            'nombre'           => $usuario[0]->nombre,
                            'apellido'         => $usuario[0]->apellido,
                            'email'            => $usuario[0]->email,
                            'telefono'         => $usuario[0]->tel,
                            'fecha_nacimiento' => $usuario[0]->fec_nac,
                            'tipo'             => $usuario[0]->tipo,
                            'login'            => true,
                        );
                        $this->session->set_userdata($user);
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
                            'usuario'    => $this->session->userdata());
                        $this->twig->display('backend', $data);
                        return 0;
                    } else {
                        $data['passwordIncorrecta'] = 'La contraseña es incorrecta';
                        $this->twig->display('login', $data);
                        return 0;

                    }
                } else {
                    $data['passwordIncorrecta'] = 'La contraseña es incorrecta';
                    // var_dump($data);
                    $this->twig->display('login', $data);
                    return 0;

                }
            } else {
                $data['noExiste'] = 'El usuario no existe';
                $this->twig->display('login', $data);
                return 0;
            }

            // var_dump($data);
            /* aca entro cuando no cumple los requisitos o me quieren poner basura */
            $this->twig->display('login', $data);
        }
    }

    public function logout()
    {
        if ($this->session->userdata('login') == false) {
            $this->twig->display('index');
            return 0;

        } else {
            $usuario_data = array('login' => false);
            $this->session->set_userdata($usuario_data);
            $data = array('usuario' => $this->session->userdata(),
                'info'                  => "sesion cerrada correctametne");
            $this->twig->display('index', $data);
            return 0;
        }
    }

    public function validar($usuario)
    {
        $errores = array('limpio' => true);
        if (!filter_var($usuario['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errores['email']        = $usuario['email'];
            $errores['emailMensaje'] = 'Email con formato correcto';
        } else {
            $errores['email']        = $usuario['email'];
            $errores['emailMensaje'] = 'Formato incorrecto del email ';
            $errores['limpio']       = false;
        }
        $str = filter_var($usuario['password'], FILTER_SANITIZE_STRING);
        if ((strlen($str) > 5) & (strlen($str) < 13)) {
            $errores['password'] = 'Cumple con el tamaño';
        } else {
            $errores['password']        = $usuario['password'];
            $errores['passwordMensaje'] = 'No cumple el tamaño';
            $errores['limpio']          = false;
        }
        return $errores;
    }
}
