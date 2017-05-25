<?php
class Login extends CI_Controller
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

        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginModel');

        // $params = array('email' => $this->input->post('email'), 'password' => $this->input->post('password'));

        $this->load->library('validarDatos');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            $this->twig->display('indexLog');
        } else {
            $this->twig->display('index');
        }
    }

    public function check()
    {
        if ($this->logueado()) {
            $this->twig->display('indexLog');
            return 0;

        } else {
            // Obtengo los datos ingresados en los inputs mediante el metodo post
            $datos = array(
                'email'    => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            /* limpiar datos de entrada */
            $data = $this->validar($datos);
            var_dump($data);die();
            /**/
            /* Se realiza un llamado a una funcion del model para obtener la consulta,
            solo con el email es suficiente para conseguir los datos del usuario ya que
            este campo es unico y no puede repetirse */
            $query = $this->loginModel->buscarUsuario($datos['email']); // La consulta retorna un objeto de tipo query lo cual tiene sus propias funciones o metodos
            if ($query) {
                /* Obtengo la tupla correspondiente al email del usuario en cuestion (como el email no puede repetirse, la consulta solo retorna una sola tupla) */
                $usuario = $query->result(); // result() es una funcion del objeto query que devuelve un arreglo de tuplas (en este caso devuelve una sola tupla)
                if ($usuario[0]->password == $datos['password']) {
                    // $usuario[0] accede a la primera tupla del arreglo y ->password accede al valor que se encuentra en el campo password
                    $user = array('email' => $usuario[0]->email,
                        'nombre'              => $usuario[0]->nombre,
                        'login'               => true);
                    $this->session->set_userdata($user);
                    $this->twig->display('indexLog');
                    return 0;
                } else {
                    $data['datos_error'] = 'Los datos ingresados son incorrectos2';
                    $this->twig->display('login', $data);
                    return 0;
                }
            } else {
                $data['datos_error'] = 'Los datos ingresados son incorrectos1';
                $this->twig->display('login', $data);
                return 0;
            }
        }
    }

    public function logueado()
    {
        if ($this->session->userdata('login') == true) {
            return true;
        } else {
            // $this->twig->display('index');
            return false;
        }
    }

    public function logout()
    {
        // var_dump($this->session->userdata);die();
        if ($this->session->userdata('login') == false) {
            $this->twig->display('index');
            return 0;

        } else {
            $usuario_data = array('login' => false);
            $this->session->set_userdata($usuario_data);
            $data = ['info' => "sesion cerrada correctametne"];
            $this->twig->display('index', $data);
            return 0;
        }
    }

    public function validar($usuario)
    {
        var_dump($usuario);
        return true;
    }
}
