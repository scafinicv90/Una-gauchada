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

    public function index()
    {

	}
    public function comentar()
    {
        $usuario1      = ($this->usuarioModel->buscarUsuario($this->input->post('usuario')));
        $usuario2=json_decode(json_encode($usuario1->result(), true));
        $query =array('descripcion' => $this->input->post('comentario'),
                        'id_usuario' =>$usuario2[0]->id_usuario );
        $this->favorModel->agregarComentario($query);
        $this->favorModel->agregarRelacionComentarioFavor($this->input->post('favor_id'));


        $cons       = $this->favorModel->buscarFavores();
            $favores    = $cons->result();
            $data = array(
                'favores'    => $favores,
                'usuario'    => $this->session->userdata());
        $this->twig->display('backend',$data);

    }
    public function responder()
    {
        $usuario1      = ($this->usuarioModel->buscarUsuario($this->input->post('usuario')));
        $usuario2=json_decode(json_encode($usuario1->result(), true));
        $query=array(
            'respuesta' => $this->input->post('respuesta'),
            'id_usuario' => $usuario2[0]->id_usuario,
            'id_comentario' => $this->input->post('comentario_id')
            );
        $this->favorModel->agregarRespuesta($query);
        $this->favorModel->updateComentario($this->input->post('comentario_id'));

        $cons       = $this->favorModel->buscarFavores();
            $favores    = $cons->result();
            $data = array(
                'favores'    => $favores,
                'usuario'    => $this->session->userdata());
        $this->twig->display('backend',$data);

    }

    public function ver($id)
    {
        if ($this->session->userdata('login')) {
            $query = $this->favorModel->obtenerFavor($id);
            $favor = json_decode(json_encode($query->result()), true);

            $query  = $this->favorModel->obtenerFavorC($id);
            $favorC = $query->result();

            $query = $this->favorModel->obtenerComentarios($id);
            if ($query != false) {
                $query = $query->result();
            }
            $query2       = $this->favorModel->obtenerRespuestas($id);
            if ($query2!=false) {
                $query2 =$query2->result();
            }

            // $id_comentarios   = json_decode(json_encode($query->result()), true);
            // var_dump($id_comentarios);die();
            // $query          = $this->favorModel->obtenerComentarios($id_comentarios);

            // $comentarios   = json_decode(json_encode($query), true);
            // var_dump($comentarios);
            // $query3        = $this->usuarioModel->obtenerUsuarios();
            // $usuarios   = json_decode(json_encode($query3->result()), true);

            $data         = array(

                'favor'     => $favorC,
                'comentarios' => $query,
                'respuestas' => $query2,
            	'usuario'    => $this->session->userdata());
		$this->twig->display('verFavor', $data);
	}else
    {
        $this->twig->display('index');
// =======
//             $data = array(

//                 'favor'       => $favorC,
//                 'comentarios' => $query,
//                 'usuario'     => $this->session->userdata());
//             $this->twig->display('verFavor', $data);
//         } else {
//             $this->twig->display('index');
//         }

// >>>>>>> 95dd9cedcd683d2f3b147ff0e22ca19416fceb57
    }}
    public function verMisGauchadas()
    {

        if ($this->session->userdata('login')) {

            $user    = $this->session->userdata();
            $usuario = json_decode(json_encode($user), true);
            $cons    = $this->favorModel->buscarMisFavores($usuario['email']);
            $favores = $cons->result();
            $favor   = json_decode(json_encode($favores), true);
            $todo    = array();
            $i       = 0;
            foreach ($favor as $fav) {
                $query    = $this->favorModel->obtenerFavorC($fav['id']);
                $todo[$i] = $query->result();
                $i++;

            }
            $data = array(
                'favores' => $todo,
                'usuario' => $this->session->userdata());
            $this->twig->display('verMisFavores', $data);

            // $id_comentarios   = json_decode(json_encode($query->result()), true);
            // var_dump($id_comentarios);die();
            // $query         = $this->favorModel->obtenerComentarios($id_comentarios);

            // $comentarios   = json_decode(json_encode($query), true);
            // var_dump($comentarios);
            // $query        = $this->usuarioModel->obtenerUsuarios();
            // $usuarios   = json_decode(json_encode($query->result()), true);

        } else {
            $this->twig->display('index');
        }

    }
}
