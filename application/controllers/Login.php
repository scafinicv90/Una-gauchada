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
    }

    public function index()
    {
        if ($this->session->userdata('login')){
            $user = $this->session->get_userdata();
            $this->twig->display('indexLog', $user);
        } else {
            $this->twig->display('index');
        }
    }

    public function check()
    {
        if ($this->logueado()) {
            //$this->twig->display('indexLog');
            //header('localhost/Una-gauchada/indexLog.php')
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
            if ($data['limpio']== true) {
                    /* Se realiza un llamado a una funcion del model para obtener la consulta,
                    solo con el email es suficiente para conseguir los datos del usuario ya que
                    este campo es unico y no puede repetirse */
                    $query = $this->loginModel->buscarUsuario($entry['email']); // La consulta retorna un objeto de tipo query lo cual tiene sus propias funciones o metodos
                    if ($query) {
                        /* Obtengo la tupla correspondiente al email del usuario en cuestion (como el email no puede repetirse, la consulta solo retorna una sola tupla) */
                        $usuario = $query->result(); // result() es una funcion del objeto query que devuelve un arreglo de tuplas (en este caso devuelve una sola tupla)
                        if ($usuario[0]->password == $entry['password']) {
                            // $usuario[0] accede a la primera tupla del arreglo y ->password accede al valor que se encuentra en el campo password
                            $user = array(
                                'nombre' => $usuario[0]->nombre,
                                'apellido' => $usuario[0]->apellido,
                                'email' => $usuario[0]->email,
                                'telefono' => $usuario[0]->tel,
                                'fecha_nacimiento' => $usuario[0]->fec_nac,
                                'tipo'=> $usuario[0]->tipo,
                                'login' => true,
                                );
/*                            var_dump($user);
*/                            $this->session->set_userdata($user);
                            $this->twig->display('indexLog',$user);
                            return 0;
                        }
                        else{
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
            }else{
                // var_dump($data);
                /* aca entro cuando no cumple los requisitos o me quieren poner basura */
                $this->twig->display('login', $data);
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
        $errores=array('limpio' => true);
        if (!filter_var($usuario['email'],FILTER_VALIDATE_EMAIL) === false) {
          $errores['email']=$usuario['email'];
          $errores['emailMensaje']='Email con formato correcto';
        } else {
            $errores['email']=$usuario['email'];
            $errores['emailMensaje']='Formato incorrecto del email ';
            $errores['limpio']=false;
        }
        $str = filter_var($usuario['password'], FILTER_SANITIZE_STRING);
        if ((strlen($str) > 5) & (strlen($str)< 13) ) {
            $errores['password']='Cumple con el tamaño';
        }else{
            $errores['password']=$usuario['password'];
            $errores['passwordMensaje']='No cumple el tamaño';
            $errores['limpio']=false;
        }
        // var_dump($errores);
        return $errores;
    }
}
